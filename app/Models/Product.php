<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'category',
        'area',
        'sub_description',
        'image_default',
        'image_additional',
        'description',
        'old_price',
        'price',
        'sale',
        'color',
        'amount',
        'size',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
