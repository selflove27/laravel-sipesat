<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['no_agenda', 'nomor_suratmasuk', 'tgl_suratmasuk', 'pengirim', 'perihal', 'tgl_diterima'];


}
