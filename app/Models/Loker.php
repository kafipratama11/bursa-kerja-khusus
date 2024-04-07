<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    use HasFactory;


    protected $fillable = [
        'employe_id',
        'nama_pekerjaan',
        'bagian',
        'nama_perusahaan',
        'bagian',
        'provinsi',
        'kota_kabupaten',
        'waktu',
        'gaji',
        'email',
        'expired',
        'deskripsi',
        'requirement',

    ];
    protected $table = 'lokers';
}