<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChartSizeCategory;

class ChartSizeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Belts',
            'chart_size_gender_id' => 1,
            'img' => '/size-images/men_guertel.webp',
            'sub_title' => 'Belt sizes',
            'description_a' => 'The classic belt size is the length in centimetres from the centre of the buckle to the middle hole.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Rings',
            'chart_size_gender_id' => 1,
            'img' => '/size-images/men_ringe.webp',
            'sub_title' => 'There are two ways to determine the ring size:',
            'description_a' => 'Measure the inside diameter of a well-fitting ring and use it to read your ring size from our chart.',
            'description_b' => 'The finger circumference in mm corresponds to the ring size. Wrap a piece of string or a piece of paper around your finger where you want to wear the ring, and then measure the length of the string.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Hats/Caps',
            'chart_size_gender_id' => 1,
            'img' => '/size-images/men_huetemuetzen.png',
            'sub_title' => 'Head circumference',
            'description_a' => 'The size of hats and caps corresponds to the head circumference in centimetres. Measure your head circumference above the ears around your head.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Gloves',
            'chart_size_gender_id' => 1,
            'img' => '/size-images/men_handschuhe.webp',
            'sub_title' => 'Glove sizes',
            'description_a' => 'For the glove size, measure the circumference of your hand at the widest point, excluding your thumb. The tape measure should loosely encircle your hand. Compare the value with our size chart.',
        ]);


        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Belts',
            'chart_size_gender_id' => 2,
            'img' => '/size-images/women_guertel.webp',
            'sub_title' => 'Belt sizes',
            'description_a' => 'The classic belt size is the length in centimetres from the centre of the buckle to the middle hole.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Rings',
            'chart_size_gender_id' => 2,
            'img' => '/size-images/women_ringe.webp',
            'sub_title' => 'There are two ways to determine the ring size:',
            'description_a' => 'Measure the inside diameter of a well-fitting ring and use it to read your ring size from our chart.',
            'description_b' => 'The finger circumference in mm corresponds to the ring size. Wrap a piece of string or a piece of paper around your finger where you want to wear the ring, and then measure the length of the string.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Hats/Caps',
            'chart_size_gender_id' => 2,
            'img' => '/size-images/women_huetemuetzen.webp',
            'sub_title' => 'Head circumference',
            'description_a' => 'The size of hats and caps corresponds to the head circumference in centimetres. Measure your head circumference above the ears around your head.',
        ]);

        $chartSizeCategory = ChartSizeCategory::create([
            'title' => 'Gloves',
            'chart_size_gender_id' => 2,
            'img' => '/size-images/women_huetemuetzen.webp',
            'sub_title' => 'Glove sizes',
            'description_a' => 'For the glove size, measure the circumference of your hand at the widest point, excluding your thumb. The tape measure should loosely encircle your hand. Compare the value with our size chart.',
        ]);
    }
}
