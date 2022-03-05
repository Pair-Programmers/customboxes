<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'style',
        'description',
        'slug',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'meta_tags',
        'meta_description',
        'is_active',
        'industry_id',
        'created_by',
    ];
}
