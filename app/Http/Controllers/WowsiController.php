<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WowsiController extends Controller
{
    public function index()
    {
        return view('wowsi.index');
    }
}
