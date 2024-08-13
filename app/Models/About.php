<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['desc', 'active_users_title', 'prepared_projects_title'];

    protected $fillable = [

        'desc',
        'image',
        'active_users_title',
        'prepared_projects_title',
        'active_users',
        'status',
        'prepared_projects',
    ];

    protected $casts = [
        'desc' => 'array',
        'active_users_title',
        'prepared_projects_title',
    ];

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
