<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);

        $user = User::create([
            'email' => strtolower($request->input('email')),
            'phone' => strtolower($request->input('phone')),
            'password' => bcrypt($request->input('password')),
            'email_verification_token' => Str::random(6),
        ]);
        session()->flash('message', 'Please check your email to activate your account');
        return redirect()->back();
    }
}
