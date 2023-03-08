<?php

namespace App\Http\Controllers;

use App\Models\QRCode;
use App\Models\QRHit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        $totalRecord = User::where('is_verified' , '=' , NULL)
                            ->where('is_active' , '=' , 1) 
                            ->where('is_admin' , '=' , NULL) 
                            ->where('is_deactive' , '=' , NULL)    
                            ->get();
        $data['totalPageCount'] = (int)ceil(sizeof($totalRecord) / $perPageRecord);

        $data['users'] = User::where('is_verified' , '=' , NULL)
                                ->where('is_active' , '=' , 1) 
                                ->where('is_admin' , '=' , NULL) 
                                ->where('is_deactive' , '=' , NULL) 
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
                            ->where('is_deactive' , '=' , NULL) 
                            ->where('is_admin' , '=' , NULL)    
                            ->get();
        $data['totalPageCount'] = (int)ceil(sizeof($totalRecord) / $perPageRecord);
        
        $data['users'] = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1) 
                            ->where('is_deactive' , '=' , NULL) 
                            ->where('is_admin' , '=' , NULL) 
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

    public function deactivate_user($id)
    {
        $user = User::where('id' , $id)->first();
        if($user)
        {
            $temp_data = [
                'is_deactive' => 1,
                'deactivated_at' => Carbon::now(),
            ];
            User::where('id' , $id)->update($temp_data);
            return redirect('active-users')->with('message' , 'The User has been deactivated.');
        }
        else
        {
            session()->flash('message', 'Invalid User.');
            return redirect()->back();
        }
    }

    public function reactivate_user($id)
    {
        $user = User::where('id' , $id)->first();
        if($user)
        {
            $temp_data = [
                'is_deactive' => NULL,
                'deactivated_at' => Carbon::now(),
            ];
            User::where('id' , $id)->update($temp_data);
            return redirect('active-users')->with('message' , 'The User has been re-activated.');
        }
        else
        {
            session()->flash('message', 'Invalid User.');
            return redirect()->back();
        }
    }

    public function deactive_user_list()
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
                            ->where('is_deactive' , '=' , 1) 
                            ->where('is_admin' , '=' , NULL)    
                            ->get();
        $data['totalPageCount'] = (int)ceil(sizeof($totalRecord) / $perPageRecord);
        
        $data['users'] = User::where('is_verified' , '=' , 1)
                            ->where('is_active' , '=' , 1) 
                            ->where('is_deactive' , '=' , 1) 
                            ->where('is_admin' , '=' , NULL) 
                            ->limit($perPageRecord)
                            ->offset($pageRecordStart)   
                            ->get();
        $data['title'] = 'Active Users';
        return view("admin.deactive-users" , $data);
    }

    public function site_statistics()
    {
        $data['active_user'] = User::where('is_active' , '1')->where('is_verified' , '1')->count();
        $data['pending_user'] = User::where('is_active' , '1')->where('is_verified' , NULL)->count();
        $data['siteHit_today'] = DB::table('site_visitor')
                                ->select('id')
                                ->whereDate('created_at' , Carbon::now())
                                ->count();
        $data['siteHit_lastOneWeek'] = DB::table('site_visitor')
                                    ->select('id')
                                    ->whereDate('created_at' , '<=' , Carbon::now())
                                    ->whereDate('created_at' , '>=' , Carbon::now()->subDays(7))
                                    ->count();
        $data['siteHit_lastOneMonth'] = DB::table('site_visitor')
                                    ->select('id')
                                    ->whereDate('created_at' , '<=' , Carbon::now())
                                    ->whereDate('created_at' , '>=' , Carbon::now()->subDays(30))
                                    ->count();
        $data['totalGeneratedQR'] = QRCode::count();
        $data['totalQRHit'] = QRHit::count();
        $data['totalQRHitOneMonth'] = QRHit::whereDate('created_at' , '<=' , Carbon::now())
                                    ->whereDate('created_at' , '>=' , Carbon::now()->subDays(30))
                                    ->count();

        $today_temp = Carbon::now()->format('d/m/Y');
        $fromDay_temp = Carbon::now()->subDays(7)->format('d/m/Y');
        $today = Carbon::createFromFormat('d/m/Y', $today_temp);
        $fromDay = Carbon::createFromFormat('d/m/Y', $fromDay_temp);
        $siteHitData = DB::table('site_visitor')
                        ->select(DB::raw('DATE(created_at) as date, COUNT(*) as hit'))
                        ->whereBetween('created_at' , [$fromDay , $today])
                        ->groupBy('date')
                        ->get(); 
        $hit = [];
        foreach($siteHitData as $key => $res){
            $hit[] = $res->hit;
        }
        $data['hit'] = json_encode(array_reverse($hit));

        $qrHitData = DB::table('q_r_hits')
                        ->select(DB::raw('DATE(created_at) as date, COUNT(*) as hit'))
                        ->whereBetween('created_at' , [$fromDay , $today])
                        ->groupBy('date')
                        ->get(); 
        $qrhit = [];
        foreach($qrHitData as $key => $res){
            $qrhit[] = $res->hit;
        }
        $data['qrhit'] = json_encode(array_reverse($qrhit));

        // dd($data['hit']);
        
        // dd($data['totalGeneratedQR']);
        $data['title'] = 'Site Statistics';
        return view("admin.site-statistics" , $data);
    }
}
