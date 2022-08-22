<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $sent = [
            "datas" => null
        ];
        return view('wowsi.kelompok', $sent);
    }

    public function searchByNim(Request $r)
    {
        // dd($r->all());

        $data = User::where(["username" => $r->nimkelompok])->first();

        if ($data != null) {
            $data->kelompoks = KelompokModel::find($data->id_kelompok);
        }
        $sent = [
            "datas" => $data
        ];
        return view('wowsi.kelompok', $sent);
        // return redirect('/wowsisearch')->with($sent);
    }
}
