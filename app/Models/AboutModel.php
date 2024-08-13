<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'abouts';

    protected $casts = [
        'desc' => 'array',
        'active_users_title' => 'array',
        'prepared_projects_title' => 'array',

    ];
}
