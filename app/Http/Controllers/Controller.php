<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function __construct()
    {
        date_default_timezone_set('Africa/Nairobi');
    }
    

    public function home_page(Request $request)
    {
        DB::table('site_visitor')->insert([
                'user_ip' => $request->ip(),
                'created_at' => Carbon::now(),
            ]);
        $data['title'] = "Dynamic QR Code | Global Technologies Ltd";
        return view('landing.home')->with($data);
    }

    public function login_page()
    {
        $data['title'] = "Login to Generate QR";
        return view('landing.loginPage')->with($data);
    }

    public function register_page()
    {
        $data['title'] = "New User? Register Then";
        return view('landing.registrationForm')->with($data);
    }

    public function search_email()
    {
        $data['title'] = "Search Your Email First to Set a New One";
        return view('landing.reset-password.searchEmail')->with($data);
    }





    // public function send_mail()
    // {
    //     $data = [
    //         "subject"=>"Testing Mail",
    //         "code" => 'AVC34D',
    //         "email" => 'mahmudur.rashid26@gmail.com'
    //         ];
    //       try
    //       {
    //         Mail::to('mahmudur.rashid26@gmail.com')->send(new VerificationMail($data));
    //         return response()->json(['Great! Successfully send in your mail']);
    //       }
    //       catch(Exception $e)
    //       {
    //         return response()->json(['Sorry! Please try again latter']);
    //       }
    // }
}
