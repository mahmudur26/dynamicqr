<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function home()
    {
        $data['title'] = 'Home Page';
        // $data['view_page'] = 'admin.admin-home';
        $data['users'] = User::where('is_active' , '=' , NULL)->get();
        return view("admin.admin-home" , $data);
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
}
