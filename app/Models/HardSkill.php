<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill',
    ];
    protected $table = 'hard_skills';
}
