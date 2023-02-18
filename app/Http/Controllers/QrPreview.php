<?php

namespace App\Http\Controllers;

use App\Models\QRCode;
use App\Models\QRHit;
use Illuminate\Http\Request;

class QrPreview extends Controller
{
    public function qr_preview($code, Request $request)
    {
        $qr = QRCode::where('random_code' , $code)->first();
        QRHit::create([
            'qr_id' => $qr->id,
            'user_ip' => $request->ip(), 
        ]);       

        return redirect()->away('http://'.$qr->input_text);
    }
}
