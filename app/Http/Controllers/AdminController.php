<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $data['users'] = User::where('is_verified' , '=' , NULL)->get();
        // dd($data['users']);
        $data['title'] = 'Home Page';
        $data['view_page'] = 'admin/admin-home';
        return view('admin/frame' , $data);
    }
}
