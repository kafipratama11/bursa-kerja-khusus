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
        'nama_perusahaan',
        'bagian',
        'lokasi',
        'waktu',
        'gaji',
        'email',
        'expired',
        'deskripsi',
        'requirement',

    ];
    protected $table = 'lokers';
}