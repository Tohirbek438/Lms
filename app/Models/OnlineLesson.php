<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OnlineLesson extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['description'];

    protected $fillable = [
        'description',
        'image',

    ];

    protected $casts = [
        'description' => 'array',
    ];

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
