<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MediaPortal extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['description'];

    protected $fillable = [
        'description',
        'image',
        'status',
    ];

    protected $casts = [
        'description' => 'array',
    ];

    public function educations()
    {
        return $this->hasMany(Education::class, 'media_id');
    }

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
