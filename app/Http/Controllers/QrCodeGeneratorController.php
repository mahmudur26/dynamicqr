<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function index()
    {
        return view('user.dynamic-qr-code-generator');
    }
}
