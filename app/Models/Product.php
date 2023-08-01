<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'title',
    //     'code',
    //     'category',
    //     'store_category',
    //     'sub_category',
    //     'area',
    //     'sub_description',
    //     'image_default',
    //     'image_additional',
    //     'description',
    //     'old_price',
    //     'price',
    //     'sale',
    //     'color',
    //     'amount',
    //     'size',
    //     'link',
    // ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function gallery() {
        return $this->hasMany(ProductGallery::class)->orderByDesc('created_at');
    }

    public function getMargedPriceAttribute()
    {
        return $this->price * 1.3;
    }

    public function getNewSaleAttribute()
    {
        return $this->new_sale = 100 - (($this->marged_price / $this->old_price) * 100);
    }

    public function getNewPriceAttribute()
    {
        $newMarge = 30 - $this->sale;

        if ($this->new_sale < 5) {
            return $this->old_price * ($newMarge / 100) + $this->old_price;
        }
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
