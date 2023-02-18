<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function test(Request $request)
    // {
    //     DB::table('site_visitor')->insert([
    //         'user_ip' => $request->ip(),
    //         'created_at' => now(),
    //     ]);
    // }

    public function test()
    {
        echo url('');
    }
}
