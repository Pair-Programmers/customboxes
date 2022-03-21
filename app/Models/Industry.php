<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'summary',
        'image',
        'description',
        'admin_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'industry_id', 'id');
    }

    public function products3()
    {
        return $this->hasMany(Product::class, 'industry_id', 'id')->orderBy('id', 'desc')->take(3);
    }
}
