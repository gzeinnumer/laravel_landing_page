<?php

namespace App\Http\Controllers;

use App\Models\TugasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    public function __construct()
    {
        if (Auth::user()->id_type_user == 2)
        return 'Access Denied';
    }

    public function index()
    {
        $data = $this->getData();
        $sent = [
            "data" => $data
        ];
        return view('tugas.index', $sent);
    }

    public function getData()
    {
        // return "data";
        $data = TugasModel::all();
        return $data;
    }

    public function create(Request $r)
    {
        // return $r->all();
        $data = new TugasModel();
        $data->nama_penugasan = $r->nama_penugasan;
        $data->detail = $r->detail;
        $data->link_submit = $r->link_submit;
        $data->deadline = $r->deadline;
        $data->save();

        return redirect()->route('tugas.index');
    }

    public function delete($id)
    {
        $data = TugasModel::find($id);

        $data->delete();

        return redirect()->route('tugas.index');
    }

    public function detailInfo($id)
    {
        $data = TugasModel::find($id);
        $sent = [
            "data" => $data
        ];
        return view('tugas.page-info', $sent);
    }

    public function detailEdit($id)
    {
        $data = TugasModel::find($id);
        $sent = [
            "data" => $data
        ];
        return view('tugas.page-edit', $sent);
    }

    public function edit(Request $r, $id)
    {
        // return $r->all();
        $data = TugasModel::find($id);
        $data->nama_penugasan = $r->nama_penugasan;
        $data->detail = $r->detail;
        $data->link_submit = $r->link_submit;
        $data->deadline = $r->deadline;
        $data->save();

        return redirect()->route('tugas.index');
    }
}
