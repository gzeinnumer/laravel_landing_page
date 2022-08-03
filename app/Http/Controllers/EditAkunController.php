<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditAkunController extends Controller
{

    

    public function index()
    {
        return view('wowsi-editakun.index');
    }

    public function editData(Request $r){
        // dd($r->all());
        $data = User::find($r->id);
        $data->nama_lengkap = $r->nama_lengkap;
        $data->tempat_lahir = $r->tempat_lahir;
        $data->nim = $r->nim;
        $data->tanggal_lahir = $r->tanggal_lahir;
        $data->email = $r->email;
        $data->alamat_asal = $r->alamat_asal;
        $data->no_hp = $r->no_hp;
        $data->agama = $r->agama;
        $data->alamat_malang = $r->alamat_malang;
        $data->jenis_kelamin = $r->jenis_kelamin;
        $data->save();
        
        return redirect('/editakun');
    }
}
