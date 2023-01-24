<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login Page';
        $data['view_page'] = 'landing/sign-in-page';
        return view('landing/frame' , $data);
    }
}
