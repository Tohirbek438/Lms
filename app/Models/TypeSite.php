<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TypeSite extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title'];

    protected $fillable = [
        'count',
        'title',
    ];

    protected $casts = [
        'title' => 'array',
    ];

    public function sites()
    {
        return $this->hasMany(MySite::class, 'type');
    }
}
