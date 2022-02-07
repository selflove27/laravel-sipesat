<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $fillable = ['no_agenda', 'nomor_suratkeluar', 'tgl_suratkeluar', 'penerima', 'perihal', 'tgl_dikirim'];
}
