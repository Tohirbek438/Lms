<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationForWeb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'education';

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];

    public function media()
    {
        return $this->belongsTo(Media::class, 'id');
    }
}
