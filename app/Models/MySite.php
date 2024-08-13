<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MySite extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title'];

    protected $fillable = [
        'id',
        'image',
        'title',
        'type',
    ];

    protected $casts = [
        'title' => 'array',
    ];

    public function site_type()
    {
        return $this->belongsTo(TypeSite::class, 'type', 'id');
    }

    public function getImage(): string
    {
        return asset('/storage').'/'.$this->image;
    }
}
