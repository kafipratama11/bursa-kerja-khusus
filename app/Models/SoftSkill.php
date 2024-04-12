<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill',
    ];
    protected $table = 'soft_skills';
}
