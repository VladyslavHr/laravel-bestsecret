<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChartSizeDefenition;

class ChartSizeDefenitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'title' => 'EU',
        ]);

        // 2
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'title' => 'Length',
        ]);


        // 3 - 6
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'title' => 'Inside diameter in mm',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'title' => 'UK',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'title' => 'IT',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'title' => 'NL',
        ]);


        // 7-11
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'title' => 'Head circumference in cm',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'title' => 'UK',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'title' => 'US',
        ]);


        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'title' => 'International',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'title' => 'Hand circumference in cm',
        ]);





        // 12-16
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'title' => 'EU',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'title' => 'IT',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'title' => 'FR',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'title' => 'UK',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'title' => 'Length',
        ]);


        // 17-20
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'title' => 'Inside diameter in mm',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'title' => 'UK',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'title' => 'IT',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'title' => 'NL',
        ]);


        // 21-23
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'title' => 'Head circumference in cm',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'title' => 'UK',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'title' => 'US',
        ]);


        // 24-25
        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'title' => 'International',
        ]);

        $chartSizeDefenition = ChartSizeDefenition::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'title' => 'Hand circumference in cm',
        ]);


    }
}
