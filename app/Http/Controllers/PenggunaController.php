<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class PenggunaController extends Controller
{
    public function create(Request $request)
    {
        $user = new User([
            'role' => $request->role,
            'name'=> $request->name,
            'username'=> $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
    }
}
