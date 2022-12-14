<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parser extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'title',
        // 'code',
        // 'sub_description',
        // 'image_default',
        // 'image_additional',
        // 'old_price',
        // 'price',
        // 'sale',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
