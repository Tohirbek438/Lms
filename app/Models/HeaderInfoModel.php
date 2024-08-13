<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderInfoModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'header_infos';

    protected $casts = [
        'desc' => 'array',
        'title' => 'array',
    ];
}
