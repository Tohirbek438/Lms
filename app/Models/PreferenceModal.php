<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceModal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'preferences';

    protected $casts = [
        'desc' => 'array',
        'title' => 'array',
    ];
}
