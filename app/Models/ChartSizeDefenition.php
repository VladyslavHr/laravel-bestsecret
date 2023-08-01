<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartSizeDefenition extends Model
{
    use HasFactory;

    protected $fillable = [
        'chart_size_category_id',
        'chart_size_gender_id',
        'title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function category() {
        return $this->belongTo(ChartSizeCategory::class);
    }

    public function gender() {
        return $this->belongTo(ChartSizeGender::class);
    }

    public function sizes() {
        return $this->hasMany(ChartSize::class);
    }

    public function guides() {
        return $this->hasMany(ChartSizeGuide::class);
    }

    // public function getDefenitionByGuideId($guideId)
    // {
    //     $defenition = $this->where('chart_size_guide_id', $guideId)->first();

    //     if ($size) {
    //         return $size->size;
    //     }

    //     return null;
    // }
}
