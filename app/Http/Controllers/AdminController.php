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
        $data['title'] = 'Pending Users';
        $data['users'] = User::where('is_verified' , '=' , NULL)
                                ->where('is_active' , '=' , 1)    
                                ->get();
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
        session()->flash('message', 'The User has been rejected.');
        return redirect()->back();
    }

    public function active_users()
    {
        $data['title'] = 'Active Users';
        $data['users'] = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1)    
                            ->get();
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
}
