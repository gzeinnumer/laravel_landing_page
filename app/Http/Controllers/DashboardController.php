<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function getData(Request $r){
        return "data";
        
    }
}
