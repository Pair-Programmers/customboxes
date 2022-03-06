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
        'image_alt_1',
        'image_alt_2',
        'image_alt_3',
        'image_alt_4',
        'image_alt_5',
        'is_active',
        'industry_id',
        'admin_id',
    ];

    public function industry()
    {
        return $this->hasOne(Industry::class, 'id', 'industry_id');
    }

    public function creator()
    {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
