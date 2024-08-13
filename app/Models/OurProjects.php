<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurProjects extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];

    public array $translatable = ['title', 'desc'];

    public function getImage(): string
    {

        return asset('/storage').'/'.$this->image;
    }
}
