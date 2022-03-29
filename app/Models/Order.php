<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'height',
        'width',
        'depth',
        'unit',
        'material',
        'color',
        'qty_1',
        'qty_2',
        'addons',
        'box_design_file',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_note',
        'page_url',
        'qoute_form',
        'status',

        'product_id',
        'user_id',
        'admin_id',
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function industry()
    {
        return $this->hasOne(Industry::class, 'id', 'industry_id');
    }

    public function customer()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
