<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartSizeGender extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function category() {
        return $this->hasMany(ChartSizeCategory::class);
    }
}
