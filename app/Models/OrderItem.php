<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_code',
        'product_title',
        'product_sizeId',
        'product_link',
        'product_sum',
        'product_new_sale',
        'product_new_sum',
        'product_count',
        'product_old_price',
        'product_sale',
        'product_price',
        'product_marged_price',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function order() {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function size() {
        return $this->belongsTo('App\Models\Size', 'product_sizeId');
    }

}
