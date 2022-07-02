<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
    }

    public function getData()
    {
        // return "data";
        return KelompokModel::all();
    }
}
