<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineDarsModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'online_lessons';

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];
}
