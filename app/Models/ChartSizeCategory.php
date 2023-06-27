<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartSizeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'chart_size_gender_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
