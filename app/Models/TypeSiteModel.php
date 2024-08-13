<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSiteModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'type_sites';

    protected $casts = [
        'title' => 'array',
    ];

    public function sites()
    {
        return $this->hasMany(MySiteModel::class, 'type');
    }
}
