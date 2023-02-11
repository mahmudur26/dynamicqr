<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function pending_users()
    {
        $data['title'] = 'Pending Users';
        $data['users'] = User::where('is_active' , '=' , NULL)->get();
        return view("admin.pending-users" , $data);
    }

    public function user_approve($id)
    {
        User::where('id' , '=' , $id)->update(['is_active' => '1']);
        session()->flash('message', 'The User has been activated.');
        return redirect()->back();
    }

    public function user_reject($id)
    {
        User::where('id' , '=' , $id)->update(['is_active' => '0']);
        session()->flash('message', 'The User has been rejected.');
        return redirect()->back();
    }

    public function active_users()
    {
        $data['title'] = 'Active Users';
        $data['users'] = User::where('is_active' , '=' , '1')->get();
        return view("admin.active-users" , $data);
    }

    public function profile()
    {
        $data['user'] = User::where('id' , '=' , Session('login_id'))->first();
        $data['title'] = 'Admin Profile';
        return view("admin.profile" , $data);
    }
}
