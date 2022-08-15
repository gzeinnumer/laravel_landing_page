<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelompokController extends Controller
{


    public function index()
    { 
        // dd(Auth::user());

        $user = User::find(Auth::user()->id);
        if ($user->id_type_user==2)
        return 'Access Denied';

        $data = $this->getData();
        $sent = [
            "data" => $data
        ];
        return view('kelompok.index', $sent);
    }

    public function getData()
    {
        // return "data";
        $data = KelompokModel::all();
        return $data;
    }

    public function create(Request $r)
    {
        return $r->all();
        $data = new KelompokModel();
        $data->kelompok = $r->kelompok;
        $data->link_grup = $r->link_grup;
        $data->save();

        return redirect()->route('kelompok.index');
    }

    public function delete($id)
    {
        $data = KelompokModel::find($id);
        // $data = KelompokModel::where(["id" => $id])->first();
        $data->delete();

        return redirect()->route('kelompok.index');
    }

    public function detailInfo($id)
    {
        $data = KelompokModel::find($id);
        $sent = [
            "data" => $data
        ];
        return view('kelompok.page-info', $sent);
    }

    public function detailEdit($id)
    {
        $data = KelompokModel::find($id);
        $sent = [
            "data" => $data
        ];
        return view('kelompok.page-edit', $sent);
    }

    public function edit(Request $r, $id)
    {
        // return $r->all();
        $data = KelompokModel::find($id);
        $data->kelompok = $r->kelompok;
        $data->link_grup = $r->link_grup;
        $data->save();

        return redirect()->route('kelompok.index');
    }
}
