<?php

namespace App\Http\Controllers;

use App\Models\PenilaianModel;      
use App\Models\User;

use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $data = $this->getData();
        $user = User::all();
        $sent = [
            "data" => $data,
            "user" => $user
        ];
        return view('penilaian.index', $sent);
    }

    public function getData()
    {
        // return "data";
        $data = PenilaianModel::all();
        return $data;
    }

    public function create(Request $r)
    {
        // return $r->all();
        $data = new PenilaianModel();
        $data->nilai1 = $r->nilai1;
        $data->nilai1 = $r->nilai2;
        $data->nilai1 = $r->nilai3;
        $data->nilai1 = $r->nilai4;
        
        $data->save();

        return redirect()->route('penilaian.index');
    }

    public function delete($id)
    {
        $data = PenilaianModel::find($id);
        // $data = TugasModel::where(["id" => $id])->first();
        $data->delete();

        return redirect()->route('penilaian.index');
    }

    public function detailInfo($id)
    {
        $data = PenilaianModel::find($id);
        $user = User::all();
        $sent = [
            "data" => $data,
            "user" => $user
        ];
        return view('penilaian.page-info', $sent);
    }

    public function detailEdit($id)
    {
        $data = $this->getData();
        $user = User::all();
        $sent = [
            "data" => $data,
            "user" => $user
        ];
        return view('penilaian.page-edit', $sent);
    }

    public function edit(Request $r, $id)
    {
        // return $r->all();
        $data = PenilaianModel::find($id);
        $data->nilai1 = $r->nilai1;
        $data->nilai1 = $r->nilai2;
        $data->nilai1 = $r->nilai3;
        $data->nilai1 = $r->nilai4;
        
        $data->save();

        return redirect()->route('penilaian.index');
    }
}
