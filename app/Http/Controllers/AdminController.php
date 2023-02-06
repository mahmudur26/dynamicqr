<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function home()
    {
        // $data['title'] = 'Home Page';
        // $data['view_page'] = 'admin/admin-home';
        $data['users'] = User::where('is_verified' , '=' , NULL)->get();
        return view("admin.admin-home" , $data);
    }
}
