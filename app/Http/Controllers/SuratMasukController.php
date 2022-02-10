<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index()
    {
        $s_masuk = SuratMasuk::all();
        return view('dashboard.SuratMasuk', ['surat_masuks' => $s_masuk]);
    }
    public function create(Request $request)
    {
        if ($request->hasFile('dokumen')) {
            $filenameWithExt = $request->file('dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $path =  $request->file('dokumen')->storeAs('public/suratmasuk', $filenameSimpan);
            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]);
        } else {
            $filenameSimpan = 'nofile.pdf';
        }
        $s_masuk = new SuratMasuk([
            'no_agenda' => $request->no_agenda,
            'jenis_surat' => $request->jenis_surat,
            'nomor_suratmasuk' => $request->nomor_suratmasuk,
            'tgl_suratmasuk' => $request->tgl_suratmasuk,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
            'tgl_diterima' => $request->tgl_diterima,
            'dokumen' => $filenameSimpan,
        ]);
        $s_masuk->save();
        return redirect('/surat-masuk')->with('sukses', 'Surat Masuk telah ditambah');
    }
}
