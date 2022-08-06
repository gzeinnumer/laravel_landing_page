<?php

namespace App\Http\Controllers;

use App\Models\TugasModel;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    public function index()
    {
        

        $tugas= TugasModel::all();
        $sent=[
            'tugas'=> $tugas
        ];
        return view('landing.index',$sent);
    }
}
