<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        $data['title'] = 'Registration Page';
        $data['view_page'] = 'landing/sign-up-page';
        return view('landing/frame' , $data);
    }

    public function register_user(Request $request)
    {
        dd($request);
    }
}
