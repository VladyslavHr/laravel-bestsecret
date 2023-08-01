<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size',
        'quantity',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
