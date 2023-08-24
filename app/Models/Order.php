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


    public const STATUS_PENDING = 'pending';
    public const STATUS_CREATED = 'created';
    public const STATUS_PAID = 'paid';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_PAYMENT_METHOD_CHOSEN = 'payment_method_chosen';
    public const STATUS_TIMEOUTED = 'timeouted';
    public const STATUS_AUTHORIZED = 'authorized';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_PARTIALLY_REFUNDED = 'partially_refunded';
    public const STATUS_FAILED = 'failed';

    public const STATUS_PREPARING = 'preparing';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_RETURNED = 'returned';
}
