<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        
        $user = User::all();
        return view('dashboard.DataPengguna',['users'=>$user]);

    }
}
