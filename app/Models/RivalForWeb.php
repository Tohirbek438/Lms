<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RivalForWeb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'rivals';

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];
}
