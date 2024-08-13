<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'our_projects';

    protected $fillable = ['title_', 'desc_'];
}
