<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'loker_id',
        'employe_id',
        'apply_id',
        'surat_interview',
        'status',
    ];
    protected $table = 'statuses';
}
