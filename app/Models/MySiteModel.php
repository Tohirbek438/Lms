<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MySiteModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'my_sites';

    protected $casts = [
        'title' => 'array',
    ];

    public function site_type()
    {
        return $this->belongsTo(TypeSiteModel::class, 'id');
    }
}
