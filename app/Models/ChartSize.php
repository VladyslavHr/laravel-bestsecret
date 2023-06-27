<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'chart_size_category_id',
        'chart_size_gender_id',
        'chart_size_guide_id',
        'chart_size_defenition_id',
        'size',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function category() {
        $this->belongTo(ChartSizeCategory::class);
    }

    public function gender() {
        $this->belongTo(ChartSizeGender::class);
    }

    public function guide() {
        $this->belongTo(ChartSizeGuide::class);
    }

    public function defenition() {
        $this->belongTo(ChartSizeDefenition::class);
    }

}
