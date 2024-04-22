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
        'jenis_kelamin',
        'provinsi',
        'kota',
        'cv',
        'portofolio',
        'portofolio_online',
    ];
    
    protected $table = 'applies';

    public function loker()
    {
        return $this->belongsTo(Loker::class);
    }
}