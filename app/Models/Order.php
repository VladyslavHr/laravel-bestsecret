<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm',
        'identification_num',
        'name',
        'last_name',
        'email',
        'phone',
        'street',
        'add_address',
        'post_code',
        'city',
        'firm_bill',
        'identification_num_bill',
        'name_bill',
        'last_name_bill',
        'email_bill',
        'phone_bill',
        'street_bill',
        'add_address_bill',
        'post_code_bill',
        'city_bill',
        'product_quantity',
        'total_price',
        'payment_status',
        'delivery_status',
        'delivery_track',
        'payment_id',
        'status_response',
        'numeric_series',
        'refund',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
