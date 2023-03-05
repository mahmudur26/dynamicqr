<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function pending_users()
    {
        $perPageRecord = 10;
        $pageRecordStart = 0;
        request('page') == null ? $data['page'] = 1 : $data['page'] = request('page'); 
        if(request('page'))
        {
            $pageRecordStart = ($data['page'] - 1)*$perPageRecord;
        }
        $totalRecord = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1)    
                            ->get();
        $data['totalPageCount'] = (int)ceil(sizeof($totalRecord) / $perPageRecord);

        $data['users'] = User::where('is_verified' , '=' , NULL)
                                ->where('is_active' , '=' , 1) 
                                ->limit($perPageRecord)
                                ->offset($pageRecordStart)    
                                ->get();
        
        $data['title'] = 'Pending Users';
        return view("admin.pending-users" , $data);
    }

    public function user_approve($id)
    {
        User::where('id' , '=' , $id)->update(['is_verified' => '1']);
        session()->flash('message', 'The User has been activated.');
        return redirect()->back();
    }

    public function user_reject($id)
    {
        User::where('id' , '=' , $id)->update(['is_verified' => '0']);
        session()->flash('message', 'The User has been rejected!');
        return redirect()->back();
    }

    public function active_users()
    {
        $perPageRecord = 10;
        $pageRecordStart = 0;
        request('page') == null ? $data['page'] = 1 : $data['page'] = request('page'); 
        if(request('page'))
        {
            $pageRecordStart = ($data['page'] - 1)*$perPageRecord;
        }
        $totalRecord = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1)    
                            ->get();
        $data['totalPageCount'] = (int)ceil(sizeof($totalRecord) / $perPageRecord);
        
        $data['users'] = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1) 
                            ->limit($perPageRecord)
                            ->offset($pageRecordStart)   
                            ->get();
        $data['title'] = 'Active Users';
        return view("admin.active-users" , $data);
    }

    public function profile()
    {
        $data['user'] = User::where('id' , '=' , Session('login_id'))->first();
        $data['title'] = 'Admin Profile';
        return view("admin.profile" , $data);
    }

    public function update_profile(Request $request)
    {
        $updated_data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        User::where('id' , '=' , Session('login_id'))->update($updated_data);
        session()->flash('message', 'Profile Updated');
        return redirect()->back();
    }

    public function update_password(Request $request)
    {
        // dd($request->old_password);
        $user = User::find(Session('login_id'));
        if(Hash::check($request->old_password , $user->password))
            {
                if($request->confirm_password != $request->new_password)
                    {
                        session()->flash('message', 'Confirm Password does not match.');
                        return redirect()->back();
                    }
                    else
                    {
                        $updated_password = [
                            'password' => bcrypt($request->input('new_password'))
                        ];
                        User::where('id' , '=' , Session('login_id'))->update($updated_password);
                        session()->flash('message', 'Password has been changed successfully.');
                        return redirect()->back();
                    }
            }
        else
            {
                session()->flash('message', 'Old Password Incorrect.');
                return redirect()->back();
            }


        // $updated_data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ];
        // User::where('id' , '=' , Session('login_id'))->update($updated_data);
        // session()->flash('message', 'Profile Updated');
        // return redirect()->back();
    }

    public function user_detail($id)
    {
        $data['user'] = User::where('id' , $id)->first();
        $data['title'] = 'User Detail';
        return view("admin.user-detail" , $data);
    }

    public function suspend_user($id)
    {
        $user = User::where('id' , $id)->first();
        if($user)
        {
            // dd('ok');
            User::where('id' , $id)->delete();
            return redirect('active-users')->with('message' , 'The User has been removed.');
        }
        else
        {
            session()->flash('message', 'Invalid User.');
            return redirect()->back();
        }
    }
}
