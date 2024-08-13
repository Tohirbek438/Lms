<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProtectModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'protects';

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];
}
