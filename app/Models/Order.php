<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'colors',
        'dimensions',
        'unit',
        'name',
        'email',
        'phone',
        'note',
        'page_url',
        'status',

        'product_id',
        'user_id',
        'admin_id',
    ];
}
