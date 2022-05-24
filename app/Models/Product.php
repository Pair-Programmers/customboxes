<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Product extends Model implements Sitemapable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'summary',
        'description',
        'slug',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'meta_tag_title',
        'meta_tag_keywords',
        'meta_tag_description',
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

    public function toSitemapTag(): Url | string | array
    {
        return route('product.show', $this->industry->slug, $this);
    }
}
