<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Industry extends Model implements Sitemapable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'summary',
        'summary2',
        'image',
        'description',
        'is_industry',
        'admin_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'industry_id', 'id')->where('is_active', true);
    }

    public function products3()
    {
        return $this->hasMany(Product::class, 'industry_id', 'id')->where('is_active', true)->orderBy('id', 'desc')->take(3);
    }

    public function toSitemapTag(): Url | string | array
    {
        return route('industry.show', $this);
    }
}
