<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResetPassword extends Controller
{
    public function search_email()
    {
        $data['title'] = 'Search Email | Reset Password';
        $data['view_page'] = 'landing.reset-password.search-email';
        return view('landing/frame' , $data);
    }

    public function send_resetPass_email(Request $request)
    {
        $userEmail = strtolower($request->user_email);
        $email_status = DB::table('users')
                        ->select('email')
                        ->where('email' , $userEmail)
                        ->first();
        if($email_status == NULL)
        {
            session()->flash('message', 'No user found with this email address. Sign Up First.');
            return redirect()->route('register');
        }
        else
        {
            $token = Str::random(6);
            $data = [
              'password_recovery_token' => $token  
            ];
            User::where('email' , $userEmail)->update($data);
        }
    }
}
