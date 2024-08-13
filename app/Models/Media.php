<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'media_portals';

    protected $casts = [
        'description' => 'array',
        'education' => 'array',
    ];

    public function educations()
    {
        return $this->hasMany(EducationForWeb::class, 'media_id');
    }
}
