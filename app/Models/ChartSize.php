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
        return $this->belongsTo(ChartSizeCategory::class);
    }

    public function gender() {
        return $this->belongsTo(ChartSizeGender::class);
    }

    public function guide() {
        return $this->belongsTo(ChartSizeGuide::class, 'chart_size_guide_id');
    }

    public function defenition() {
        return $this->belongsTo(ChartSizeDefenition::class, 'chart_size_defenition_id');
    }

    public function getSizesAttribute()
    {
        return explode('|', $this->size);
    }

    // public function getSizeByGuide($guideId)
    // {
    //     $sizes = $this->getSizesAttribute();

    //     foreach ($sizes as $size) {
    //         if ($size === $guideId) {
    //             return $size;
    //         }
    //     }

    //     return null;
    // }

    public function getSizeByGuide($guideId)
    {
        $sizes = $this->getSizesAttribute();

        foreach ($sizes as $size) {
            if (strpos($size, $guideId) !== false) {
                return $size;
            }
        }

        return null;
    }

}
