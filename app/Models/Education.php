<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Education extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['description', 'title'];

    protected $fillable = [
        'description',
        'image',
        'title',
        'media_id',
    ];

    protected $casts = [
        'description' => 'array',
        'title' => 'array',
    ];

    public function media()
    {
        return $this->belongsTo(MediaPortal::class, 'id');
    }

    public function getImage(): string
    {
        return asset('/storage'.'/'.$this->image);
    }
}
