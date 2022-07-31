<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use App\Models\User;
use Illuminate\Http\Request;

class WowsiController extends Controller
{
    public function index()
    {
        return view('wowsi.index');
    }

    public function searchByNim(Request $r){
        // dd($r->all());
        $data = User::where(["nim" => $r->nimkelompok])->first();

        if ($data != null) {
            $data->kelompoks = KelompokModel::find($data->id_kelompok);
        }
        $sent = [
            "datas" => $data
        ];
        return view('wowsi.index', $sent);


    }
}
