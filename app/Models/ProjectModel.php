<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'our_projects';

    protected $casts = [
        'desc' => 'array',
        'title' => 'array',
    ];
}
