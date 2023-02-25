<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $email_status = DB::table('users')
                        ->select('email')
                        ->where('email' , $request->user_email)
                        ->first();
        if($email_status == NULL)
        {
            session()->flash('message', 'No user found with this email address. Sign Up First.');
            return redirect()->route('register');
        }
        else
        {
            
        }
    }
}
