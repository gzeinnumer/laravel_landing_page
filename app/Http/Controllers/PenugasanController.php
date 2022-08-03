<?php

namespace App\Http\Controllers;

use App\Models\PenilaianModel;
use App\Models\TugasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenugasanController extends Controller
{
    public function index()
    {
        $tugas= TugasModel::all();
        $penilaian= PenilaianModel::where(['id_user'=>Auth::user()->id])->first();
        $sent=[
            'tugas'=> $tugas,
            'penilaian' => $penilaian
            
        ];
        return view('wowsi-penugasan.index',$sent);
    }
}
