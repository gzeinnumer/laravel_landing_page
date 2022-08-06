<?php

namespace App\Http\Controllers;

use App\Models\PenilaianModel;      
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{

  
    public function index()
    {
//         $crashedCarIds = CrashedCar::pluck('car_id')->all();
// $cars = Car::whereNotIn('id', $crashedCarIds)->select(...)->get();


        $user = User::find(Auth::user()->id);
        if ($user->id_type_user==2)
        return 'Access Denied';

        $data = $this->getData();
        $temp=PenilaianModel::pluck('id_user')->all();
        $user = User::whereNotIn('id',$temp)->get();
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

        //looping buat ngambil data dari tabel lain satu satu (lebih praktis dari belongs to dll)
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]->users=User::find($data[$i]->id_user);
        }
        return $data;
    }

    public function create(Request $r)
    {
        // return $r->all();
        $data = new PenilaianModel();
        $data->id_user = $r->id_user;
        $data->nilai1 = $r->nilai1;
        $data->nilai2 = $r->nilai2;
        $data->nilai3 = $r->nilai3;
        $data->nilai4 = $r->nilai4;
        
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
        // ambil 1 baris data
        $data->users=User::find($data->id_user);
        $user = User::all();
        $sent = [
            "data" => $data,
            "user" => $user
        ];
        return view('penilaian.page-info', $sent);
    }

    public function detailEdit($id)
    {
        $data = PenilaianModel::find($id);
        $data->users=User::find($data->id_user);
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
        $data->nilai2 = $r->nilai2;
        $data->nilai3 = $r->nilai3;
        $data->nilai4 = $r->nilai4;
        
        $data->save();

        return redirect()->route('penilaian.index');
    }
}
