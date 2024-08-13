<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Preference extends Model
{
    use HasTranslations;

    public $translatable = ['desc', 'title'];

    protected $fillable = [
        'desc',
        'image',
        'title',
    ];

    protected $casts = [
        'desc' => 'array',
        'title' => 'array',
    ];

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
