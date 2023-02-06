<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeShowingController extends Controller
{
    public function index()
    {
        return view('qr-code');
    }
}
