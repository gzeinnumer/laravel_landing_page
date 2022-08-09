<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    

    public function index()
    {
        // dd(Auth::user());

        $user = User::find(Auth::user()->id);
        if ($user->id_type_user==2)
        return 'Access Denied';
        
        $data = $this->getData();
        $kelompok = KelompokModel::all();
        $sent = [
            "data" => $data,
            "kelompok" => $kelompok
        ];
        return view('user.index', $sent);
    }

    public function getData()
    {
        // return "data";
        $data = User::all();
        return $data;
    }

    public function create(Request $r)
    {
        // return $r->all();
        $data = new User();
        $data->name = $r->name;
        $data->email = $r->email;
        $data->password = bcrypt($r->password);
        $data->nama_lengkap = $r->nama_lengkap;
        $data->nim = $r->nim;
        $data->alamat_asal = $r->alamat_asal;
        $data->alamat_malang = $r->alamat_malang;
        $data->tempat_lahir = $r->tempat_lahir;
        $data->tanggal_lahir = $r->tanggal_lahir;
        $data->jenis_kelamin = $r->jenis_kelamin;
        $data->agama = $r->agama;
        $data->no_hp = $r->no_hp;
        $data->id_kelompok = $r->id_kelompok;
        $data->save();

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->route('user.index');
    }

    public function detailInfo($id)
    {
        $data = User::find($id);
        $kelompok = KelompokModel::all();
        $sent = [
            "data" => $data,
            "kelompok" => $kelompok
        ];
        return view('user.page-info', $sent);
    }

    public function detailEdit($id)
    {
        $data = User::find($id);
        $kelompok = KelompokModel::all();
        $sent = [
            "data" => $data,
            "kelompok" => $kelompok
        ];
        return view('user.page-edit', $sent);
    }

    public function edit(Request $r, $id)
    {
        // return $r->all();
        $data = User::find($id);
        $data->name = $r->name;
        $data->email = $r->email;


        // IMPORTANTO FOR PASSWORD
        if ($r->password != ""){
            $data->password = bcrypt($r->password);
        }

        $data->nama_lengkap = $r->nama_lengkap;
        $data->nim = $r->nim;
        $data->alamat_asal = $r->alamat_asal;
        $data->alamat_malang = $r->alamat_malang;
        $data->tempat_lahir = $r->tempat_lahir;
        $data->tanggal_lahir = $r->tanggal_lahir;
        $data->jenis_kelamin = $r->jenis_kelamin;
        $data->agama = $r->agama;
        $data->no_hp = $r->no_hp;
        $data->id_kelompok = $r->id_kelompok;

        $data->save();

        return redirect()->route('user.index');
    }

    public function searchUser(Request $r)
    {
        // dd($r->all());
        $data = User::select()->where('nama_lengkap','like',"%$r->user_value%")->orwhere('username','like',"%$r->user_value%")->get();
        return json_encode($data);

    }
}
