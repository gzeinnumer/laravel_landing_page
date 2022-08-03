<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class DashboardController extends Controller
{

    public function __construct()
    {
        dd(Auth::user());
        // $user = User::find(Auth::user()->id);
        // if ($user->id_type_user==2)
        // return 'Access Denied';
    }

    public function index()
    {
        return view('dashboard.index');
    }

    
}
