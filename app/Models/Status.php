<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'loker_id',
        'apply_id',
        'status',
        'surat_interview',
    ];
    protected $table = 'statuses';
}
