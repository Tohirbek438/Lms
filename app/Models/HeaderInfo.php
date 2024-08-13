<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HeaderInfo extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['desc', 'title'];

    protected $fillable = [
        'desc',
        'count',
        'title',
    ];

    protected $casts = [
        'desc' => 'array',
        'title' => 'array',
    ];
}
