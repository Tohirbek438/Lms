<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Rival extends Model
{
    use HasFactory;
    use HasFactory;
    use HasTranslations;

    public $translatable = ['description', 'title'];

    protected $fillable = [
        'description',
        'image',
        'title',
        'users',
    ];

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
