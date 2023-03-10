<?php

namespace App\Http\Controllers;

use App\Models\QRHit;
use App\Models\QRCode;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QrPreview extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Africa/Nairobi');
    }
    
    public function qr_preview($code, Request $request)
    {
        $qr = QRCode::where('random_code' , $code)->first();
        QRHit::create([
            'qr_id' => $qr->id,
            'user_ip' => $request->ip(), 
            'created_at' => Carbon::now(),
        ]);       

        return redirect()->away('http://'.$qr->input_text);
    }
}
