<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'employe_id',
        'loker_id',
        'nama',
        'email',
        'no_telp',
        'jenis_kelamin',
        'provinsi',
        'kota',
        'cv',
        'portofolio',
        'portofolio_online',
    ];
    protected $table = 'apply';
}
