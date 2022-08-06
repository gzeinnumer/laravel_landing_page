<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginIndexController extends Controller
{
    public function index()
    {
        return view('auth.loginv2');
    }
}
