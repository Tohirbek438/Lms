<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['location'];

    protected $fillable = [
        'number1',
        'other_number',
        'location',
        'email',
    ];

    protected $casts = [
        'location' => 'array',
    ];
}
