<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'nama_pekerjaan',
        'status',
        'lama_bekerja',
        'deskripsi',
    ];
    protected $table = 'experiences';
}
