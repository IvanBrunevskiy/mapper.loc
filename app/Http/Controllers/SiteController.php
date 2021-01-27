<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $userIvan = ["Brunevskiy Ivan"];
        return view('welcome', [
            'user' => $userIvan
        ]);
    }

    public function test()
    {
        return view('site.test');
    }
}
