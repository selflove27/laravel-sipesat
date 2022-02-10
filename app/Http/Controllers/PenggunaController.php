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
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect('/data-pengguna')->with('sukses', 'Data Pengguna Berhasil ditambahkan');
    }
    public function edit(Request $request, $id)
    {
        $user = User::find($id)->update($request->all());
        return redirect('/data-pengguna')->with('edit', 'Data Pengguna telah diperbaharui');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/data-pengguna')->with('delete', 'Data Pengguna telah dihapus');
    }
}
