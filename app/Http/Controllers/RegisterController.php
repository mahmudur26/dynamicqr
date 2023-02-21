<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Mail;

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

        $token = Str::random(6);
        $user_email = strtolower($request->input('email'));

        $user = User::create([
            'email' => strtolower($request->input('email')),
            'phone' => strtolower($request->input('phone')),
            'password' => bcrypt($request->input('password')),
            'email_verification_token' => $token,
        ]);
        $this->sendProfileVerifyMailTo($user_email , $token);
        session()->flash('message', 'Please check your email to activate your account');
        return redirect()->back();
    }

    public function sendProfileVerifyMailTo($email , $code)
    {
        $data = [
            "subject"=>"Verify your Email",
            "code" => $code
            ];
          try
          {
            Mail::to($email)->send(new VerificationMail($data));
          }
          catch(Exception $e)
          {
          }
    }
}
