<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Africa/Nairobi');
    }
    
    public function login()
    {
        $data['title'] = 'Login Page';
        $data['view_page'] = 'landing/sign-in-page';
        return view('landing/frame' , $data);
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required',
        ]);

        $login_email = strtolower($request->login_email);
        $verification = User::where('email' , '=' , $login_email)->first();
        if(!$verification)
            { //USER NOT FOUND
                session()->flash('message', 'No user found with this email address. Sign Up First.');
                return redirect()->back();
            }
        else //USER FOUND, LET'S CHECK PASSWORD
            {
                if(Hash::check($request->login_password , $verification->password))
                    {
                        if($verification->is_verified != 1)
                            {
                                session()->flash('message', 'Verify your Email First.');
                                return redirect()->back();
                            }
                        if($verification->is_active != 1)
                            {
                                session()->flash('message', 'Your profile verification is on processinng. Please Wait.');
                                return redirect()->back();
                            }
                        if($verification->is_deactive != NULL)
                            {
                                session()->flash('message', 'Your profile is deactivated. Contact with the Site Administrator.');
                                return redirect()->back();
                            }
                        if($verification->is_admin == NULL)
                            { //IF ADMIN FALSE, NORMAL USER
                                $request->session()->put('login_id' , $verification->id);
                                return redirect('dynamic-qr-generator');
                            }
                        else
                            { //IF ADMIN TRUE
                                $request->session()->put('login_id' , $verification->id);
                                return redirect('pending-users');
                            }
                    }
                else //WRONG PASSWORD
                    {
                        session()->flash('message', 'Incorrect Password.');
                        return redirect()->back();
                    }
            }
    }

    public function logout()
    {
        if(Session::has('login_id'))
            Session::pull('login_id');
        return redirect('login')->with('message' , 'Logged Out! We are gonna miss you!');
    }
}
