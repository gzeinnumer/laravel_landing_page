<?php

namespace App\Http\Controllers;

use App\Models\TugasModel;
use Illuminate\Http\Request;

class PenugasanController extends Controller
{
    public function index()
    {
        $tugas= TugasModel::all();
        $sent=[
            'tugas'=> $tugas
        ];
        return view('wowsi-penugasan.index',$sent);
    }
}
