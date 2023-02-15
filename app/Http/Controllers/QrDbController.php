<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\QRCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QrDbController extends Controller
{
    public function index()
    {
        $qr = QRCode::all();
        return view ('qr-code')->with('qr', $qr);
    }

    public function generator()
    {
        return view('user.dynamic-qr-code-generator');
    }
    
    public function create()
    {
        return view('dynamic-qr-code-generator.blade');
    }
   
    public function store_qr(Request $request)
    {
        $request->validate([
            'user_input' => 'required',
        ]);

        $securityCode = Str::random(6);


        $dynamicLink = 'www.thiswebsite.com/' . $securityCode;
        
        $qr = QRCode::create([
            'user_id' => Session('login_id'),
            'input_text' => $request->input('user_input'),
            'logo_name' => $request->input('logo_name'),
            'dot_color' => $request->input('dot_color'),
            'eye_color' => $request->input('eye_color'),
            'dot_style' => $request->input('dot_style'),
            'eye_style' => $request->input('eye_style'),
            'random_code' => $securityCode,
            'dynamic_link' => $dynamicLink,
        ]);
        $qrid = $qr->id;
        return view('/user/qr-code')->with('qr', $qr);  
    }

    public function qr_show()
    {
        return view('user.qr-code');
    }

    public function show($qrid)
    {
        $qr = QRCode::find($qrid);
        return view('/qr-code')->with('qr', $qr);
    }

    public function profile()
    {
        $data['user'] = User::where('id' , '=' , Session('login_id'))->first();
        // dd($data['user']);
        $data['title'] = 'User Profile';
        return view("user.profile" , $data);
    }
}
