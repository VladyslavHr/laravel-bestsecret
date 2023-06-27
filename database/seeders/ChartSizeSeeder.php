<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChartSize;

class ChartSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Men

        // Belts

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 1,
            'chart_size_defenition_id' => 1,
            'size' => '44',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 1,
            'chart_size_defenition_id' => 2,
            'size' => '80',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 2,
            'chart_size_defenition_id' => 1,
            'size' => '46',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 2,
            'chart_size_defenition_id' => 2,
            'size' => '85',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 3,
            'chart_size_defenition_id' => 1,
            'size' => '48',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 3,
            'chart_size_defenition_id' => 2,
            'size' => '90',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 4,
            'chart_size_defenition_id' => 1,
            'size' => '50',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 4,
            'chart_size_defenition_id' => 2,
            'size' => '90/95',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 5,
            'chart_size_defenition_id' => 1,
            'size' => '52',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 5,
            'chart_size_defenition_id' => 2,
            'size' => '95',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 6,
            'chart_size_defenition_id' => 1,
            'size' => '54',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 6,
            'chart_size_defenition_id' => 2,
            'size' => '100',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 7,
            'chart_size_defenition_id' => 1,
            'size' => '56',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 7,
            'chart_size_defenition_id' => 2,
            'size' => '105',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 8,
            'chart_size_defenition_id' => 1,
            'size' => '58',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 8,
            'chart_size_defenition_id' => 2,
            'size' => '110',
        ]);




        // Rings
        // guide 9
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 9,
            'chart_size_defenition_id' => 3,
            'size' => '15,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 9,
            'chart_size_defenition_id' => 4,
            'size' => 'I',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 9,
            'chart_size_defenition_id' => 5,
            'size' => '8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 9,
            'chart_size_defenition_id' => 6,
            'size' => '15,5',
        ]);
        // guide 10
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 10,
            'chart_size_defenition_id' => 3,
            'size' => '15,9',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 10,
            'chart_size_defenition_id' => 4,
            'size' => 'K',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 10,
            'chart_size_defenition_id' => 5,
            'size' => '10',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 10,
            'chart_size_defenition_id' => 6,
            'size' => '16',
        ]);
        // guide 11
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 11,
            'chart_size_defenition_id' => 3,
            'size' => '16,2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 11,
            'chart_size_defenition_id' => 4,
            'size' => 'K 1/2 - L',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 11,
            'chart_size_defenition_id' => 5,
            'size' => '11',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 11,
            'chart_size_defenition_id' => 6,
            'size' => '16,5',
        ]);
        // guide 12
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 12,
            'chart_size_defenition_id' => 3,
            'size' => '16,5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 12,
            'chart_size_defenition_id' => 4,
            'size' => 'L 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 12,
            'chart_size_defenition_id' => 5,
            'size' => '12',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 12,
            'chart_size_defenition_id' => 6,
            'size' => '16,5',
        ]);
        // guide 13
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 13,
            'chart_size_defenition_id' => 3,
            'size' => '16,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 13,
            'chart_size_defenition_id' => 4,
            'size' => 'M - M 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 13,
            'chart_size_defenition_id' => 5,
            'size' => '13',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 13,
            'chart_size_defenition_id' => 6,
            'size' => '17',
        ]);
        // guide 14
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 14,
            'chart_size_defenition_id' => 3,
            'size' => '17,2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 14,
            'chart_size_defenition_id' => 4,
            'size' => 'N - N 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 14,
            'chart_size_defenition_id' => 5,
            'size' => '14',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 14,
            'chart_size_defenition_id' => 6,
            'size' => '17,5',
        ]);
        // guide 15
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 15,
            'chart_size_defenition_id' => 3,
            'size' => '17,5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 15,
            'chart_size_defenition_id' => 4,
            'size' => 'O',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 15,
            'chart_size_defenition_id' => 5,
            'size' => '15',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 15,
            'chart_size_defenition_id' => 6,
            'size' => '17,5',
        ]);
        // guide 16
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 16,
            'chart_size_defenition_id' => 3,
            'size' => '17,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 16,
            'chart_size_defenition_id' => 4,
            'size' => 'O 1/2 - P',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 16,
            'chart_size_defenition_id' => 5,
            'size' => '16',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 16,
            'chart_size_defenition_id' => 6,
            'size' => '18',
        ]);
        // guide 17
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 17,
            'chart_size_defenition_id' => 3,
            'size' => '18,1',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 17,
            'chart_size_defenition_id' => 4,
            'size' => 'P 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 17,
            'chart_size_defenition_id' => 5,
            'size' => '17',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 17,
            'chart_size_defenition_id' => 6,
            'size' => '18',
        ]);
        // guide 18
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 18,
            'chart_size_defenition_id' => 3,
            'size' => '18,4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 18,
            'chart_size_defenition_id' => 4,
            'size' => 'Q - Q 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 18,
            'chart_size_defenition_id' => 5,
            'size' => '18',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 18,
            'chart_size_defenition_id' => 6,
            'size' => '18,5',
        ]);
        // guide 19
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 19,
            'chart_size_defenition_id' => 3,
            'size' => '18,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 19,
            'chart_size_defenition_id' => 4,
            'size' => 'R - R 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 19,
            'chart_size_defenition_id' => 5,
            'size' => '19',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 19,
            'chart_size_defenition_id' => 6,
            'size' => '19',
        ]);
        // guide 20
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 20,
            'chart_size_defenition_id' => 3,
            'size' => '19,1',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 20,
            'chart_size_defenition_id' => 4,
            'size' => 'S',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 20,
            'chart_size_defenition_id' => 5,
            'size' => '20',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 20,
            'chart_size_defenition_id' => 6,
            'size' => '19',
        ]);
        // guide 21
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 21,
            'chart_size_defenition_id' => 3,
            'size' => '19,4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 21,
            'chart_size_defenition_id' => 4,
            'size' => 'S 1/2 - T',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 21,
            'chart_size_defenition_id' => 5,
            'size' => '21',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 21,
            'chart_size_defenition_id' => 6,
            'size' => '19,5',
        ]);
        // guide 22
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 22,
            'chart_size_defenition_id' => 3,
            'size' => '19,7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 22,
            'chart_size_defenition_id' => 4,
            'size' => 'T 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 22,
            'chart_size_defenition_id' => 5,
            'size' => '22',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 22,
            'chart_size_defenition_id' => 6,
            'size' => '20',
        ]);
        // guide 23
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 23,
            'chart_size_defenition_id' => 3,
            'size' => '19,7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 23,
            'chart_size_defenition_id' => 4,
            'size' => 'T 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 23,
            'chart_size_defenition_id' => 5,
            'size' => '22',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 23,
            'chart_size_defenition_id' => 6,
            'size' => '20',
        ]);
        // guide 24
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 24,
            'chart_size_defenition_id' => 3,
            'size' => '20',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 24,
            'chart_size_defenition_id' => 4,
            'size' => 'U - U 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 24,
            'chart_size_defenition_id' => 5,
            'size' => '23',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 24,
            'chart_size_defenition_id' => 6,
            'size' => '20',
        ]);
        // guide 25
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 25,
            'chart_size_defenition_id' => 3,
            'size' => '20,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 25,
            'chart_size_defenition_id' => 4,
            'size' => 'V - V 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 25,
            'chart_size_defenition_id' => 5,
            'size' => '24',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 25,
            'chart_size_defenition_id' => 6,
            'size' => '20,5',
        ]);
        // guide 26
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 26,
            'chart_size_defenition_id' => 3,
            'size' => '20,6',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 26,
            'chart_size_defenition_id' => 4,
            'size' => 'W',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 26,
            'chart_size_defenition_id' => 5,
            'size' => '25',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 26,
            'chart_size_defenition_id' => 6,
            'size' => '20,5',
        ]);
        // guide 27
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 27,
            'chart_size_defenition_id' => 3,
            'size' => '21',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 27,
            'chart_size_defenition_id' => 4,
            'size' => 'W 1/2 - X',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 27,
            'chart_size_defenition_id' => 5,
            'size' => '26',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 27,
            'chart_size_defenition_id' => 6,
            'size' => '21',
        ]);
        // guide 28
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 28,
            'chart_size_defenition_id' => 3,
            'size' => '21,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 28,
            'chart_size_defenition_id' => 4,
            'size' => 'X 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 28,
            'chart_size_defenition_id' => 5,
            'size' => '27',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 28,
            'chart_size_defenition_id' => 6,
            'size' => '21,5',
        ]);
        // guide 29
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 29,
            'chart_size_defenition_id' => 3,
            'size' => '21,6',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 29,
            'chart_size_defenition_id' => 4,
            'size' => 'Y - Y 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 29,
            'chart_size_defenition_id' => 5,
            'size' => '28',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 29,
            'chart_size_defenition_id' => 6,
            'size' => '21,5',
        ]);

        // Hats
        //Guide 30
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 7,
            'size' => '54',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 8,
            'size' => '6 5/8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 9,
            'size' => '6 3/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 7,
            'size' => '55',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 8,
            'size' => '6 3/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 30,
            'chart_size_defenition_id' => 9,
            'size' => '6 7/8',
        ]);
        // guide 31
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 7,
            'size' => '56',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 8,
            'size' => '6 7/8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 9,
            'size' => '7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 7,
            'size' => '57',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 8,
            'size' => '7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 31,
            'chart_size_defenition_id' => 9,
            'size' => '7 1/8',
        ]);
        // guide 32
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 7,
            'size' => '58',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 8,
            'size' => '7 1/8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 9,
            'size' => '7 1/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 7,
            'size' => '59',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 8,
            'size' => '7 1/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 32,
            'chart_size_defenition_id' => 9,
            'size' => '7 3/8',
        ]);
        // guide 33
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 7,
            'size' => '60',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 8,
            'size' => '7 3/8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 9,
            'size' => '7 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 7,
            'size' => '61',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 8,
            'size' => '7 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 33,
            'chart_size_defenition_id' => 9,
            'size' => '7 5/8',
        ]);
        // guide 34
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 7,
            'size' => '62',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 8,
            'size' => '7 5/8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 9,
            'size' => '7 3/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 7,
            'size' => '63',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 8,
            'size' => '7 3/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 34,
            'chart_size_defenition_id' => 9,
            'size' => '8',
        ]);




        // Gloves
        // guide 35
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 35,
            'chart_size_defenition_id' => 10,
            'size' => '7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 35,
            'chart_size_defenition_id' => 11,
            'size' => '19',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 35,
            'chart_size_defenition_id' => 10,
            'size' => '7.5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 35,
            'chart_size_defenition_id' => 11,
            'size' => '20',
        ]);
        // guide 36
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 36,
            'chart_size_defenition_id' => 10,
            'size' => '8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 36,
            'chart_size_defenition_id' => 11,
            'size' => '22',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 36,
            'chart_size_defenition_id' => 10,
            'size' => '8.5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 36,
            'chart_size_defenition_id' => 11,
            'size' => '23',
        ]);
        // guide 37
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 37,
            'chart_size_defenition_id' => 10,
            'size' => '9',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 37,
            'chart_size_defenition_id' => 11,
            'size' => '24',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 37,
            'chart_size_defenition_id' => 10,
            'size' => '9.5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 37,
            'chart_size_defenition_id' => 11,
            'size' => '26',
        ]);
        // guide 38
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 38,
            'chart_size_defenition_id' => 10,
            'size' => '10',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 38,
            'chart_size_defenition_id' => 11,
            'size' => '27',
        ]);
        // guide 39
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 39,
            'chart_size_defenition_id' => 10,
            'size' => '11',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 1,
            'chart_size_guide_id' => 39,
            'chart_size_defenition_id' => 11,
            'size' => '29',
        ]);



        // Women


        // Belts
        // guide 40
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 40,
            'chart_size_defenition_id' => 12,
            'size' => '32',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 40,
            'chart_size_defenition_id' => 13,
            'size' => '36',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 40,
            'chart_size_defenition_id' => 14,
            'size' => '34',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 40,
            'chart_size_defenition_id' => 15,
            'size' => '4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 40,
            'chart_size_defenition_id' => 16,
            'size' => '70',
        ]);
        // guide 41
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 41,
            'chart_size_defenition_id' => 12,
            'size' => '34',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 41,
            'chart_size_defenition_id' => 13,
            'size' => '38',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 41,
            'chart_size_defenition_id' => 14,
            'size' => '36',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 41,
            'chart_size_defenition_id' => 15,
            'size' => '6',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 41,
            'chart_size_defenition_id' => 16,
            'size' => '75',
        ]);
        // guide 42
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 42,
            'chart_size_defenition_id' => 12,
            'size' => '36',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 42,
            'chart_size_defenition_id' => 13,
            'size' => '40',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 42,
            'chart_size_defenition_id' => 14,
            'size' => '38',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 42,
            'chart_size_defenition_id' => 15,
            'size' => '8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 42,
            'chart_size_defenition_id' => 16,
            'size' => '80',
        ]);
        // guide 43
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 43,
            'chart_size_defenition_id' => 12,
            'size' => '38',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 43,
            'chart_size_defenition_id' => 13,
            'size' => '42',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 43,
            'chart_size_defenition_id' => 14,
            'size' => '40',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 43,
            'chart_size_defenition_id' => 15,
            'size' => '10',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 43,
            'chart_size_defenition_id' => 16,
            'size' => '85',
        ]);
        // guide 44
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 44,
            'chart_size_defenition_id' => 12,
            'size' => '40',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 44,
            'chart_size_defenition_id' => 13,
            'size' => '44',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 44,
            'chart_size_defenition_id' => 14,
            'size' => '42',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 44,
            'chart_size_defenition_id' => 15,
            'size' => '12',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 44,
            'chart_size_defenition_id' => 16,
            'size' => '90',
        ]);
        // guide 45
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 45,
            'chart_size_defenition_id' => 12,
            'size' => '42',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 45,
            'chart_size_defenition_id' => 13,
            'size' => '46',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 45,
            'chart_size_defenition_id' => 14,
            'size' => '44',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 45,
            'chart_size_defenition_id' => 15,
            'size' => '14',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 45,
            'chart_size_defenition_id' => 16,
            'size' => '95',
        ]);
        // guide 46
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 46,
            'chart_size_defenition_id' => 12,
            'size' => '44',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 46,
            'chart_size_defenition_id' => 13,
            'size' => '48',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 46,
            'chart_size_defenition_id' => 14,
            'size' => '46',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 46,
            'chart_size_defenition_id' => 15,
            'size' => '16',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 46,
            'chart_size_defenition_id' => 16,
            'size' => '100',
        ]);
        // guide 47
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 47,
            'chart_size_defenition_id' => 12,
            'size' => '46',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 47,
            'chart_size_defenition_id' => 13,
            'size' => '50',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 47,
            'chart_size_defenition_id' => 14,
            'size' => '48',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 47,
            'chart_size_defenition_id' => 15,
            'size' => '18',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 1,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 47,
            'chart_size_defenition_id' => 16,
            'size' => '105',
        ]);


        // Rings

        // guide 48
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 48,
            'chart_size_defenition_id' => 17,
            'size' => '15,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 48,
            'chart_size_defenition_id' => 18,
            'size' => 'I',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 48,
            'chart_size_defenition_id' => 19,
            'size' => '8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 48,
            'chart_size_defenition_id' => 20,
            'size' => '15,5',
        ]);
        // guide 49
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 49,
            'chart_size_defenition_id' => 17,
            'size' => '15,9',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 49,
            'chart_size_defenition_id' => 18,
            'size' => 'K',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 49,
            'chart_size_defenition_id' => 19,
            'size' => '10',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 49,
            'chart_size_defenition_id' => 20,
            'size' => '16',
        ]);
        // guide 50
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 50,
            'chart_size_defenition_id' => 17,
            'size' => '16,2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 50,
            'chart_size_defenition_id' => 18,
            'size' => 'K 1/2 - L',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 50,
            'chart_size_defenition_id' => 19,
            'size' => '11',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 50,
            'chart_size_defenition_id' => 20,
            'size' => '16,5',
        ]);
        // guide 51
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 51,
            'chart_size_defenition_id' => 17,
            'size' => '16,5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 51,
            'chart_size_defenition_id' => 18,
            'size' => 'L 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 51,
            'chart_size_defenition_id' => 19,
            'size' => '12',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 51,
            'chart_size_defenition_id' => 20,
            'size' => '16,5',
        ]);
        // guide 52
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 52,
            'chart_size_defenition_id' => 17,
            'size' => '16,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 52,
            'chart_size_defenition_id' => 18,
            'size' => 'M - M 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 52,
            'chart_size_defenition_id' => 19,
            'size' => '13',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 52,
            'chart_size_defenition_id' => 20,
            'size' => '17',
        ]);
        // guide 53
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 53,
            'chart_size_defenition_id' => 17,
            'size' => '17,2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 53,
            'chart_size_defenition_id' => 18,
            'size' => 'N - N 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 53,
            'chart_size_defenition_id' => 19,
            'size' => '14',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 53,
            'chart_size_defenition_id' => 20,
            'size' => '17,5',
        ]);
        // guide 54
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 54,
            'chart_size_defenition_id' => 17,
            'size' => '17,5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 54,
            'chart_size_defenition_id' => 18,
            'size' => 'O',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 54,
            'chart_size_defenition_id' => 19,
            'size' => '15',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 54,
            'chart_size_defenition_id' => 20,
            'size' => '17,5',
        ]);
        // guide 55
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 55,
            'chart_size_defenition_id' => 17,
            'size' => '17,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 55,
            'chart_size_defenition_id' => 18,
            'size' => 'O 1/2 - P',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 55,
            'chart_size_defenition_id' => 19,
            'size' => '16',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 55,
            'chart_size_defenition_id' => 20,
            'size' => '18',
        ]);
        // guide 56
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 56,
            'chart_size_defenition_id' => 17,
            'size' => '18,1',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 56,
            'chart_size_defenition_id' => 18,
            'size' => 'P 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 56,
            'chart_size_defenition_id' => 19,
            'size' => '17',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 56,
            'chart_size_defenition_id' => 20,
            'size' => '18',
        ]);
        // guide 57
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 57,
            'chart_size_defenition_id' => 17,
            'size' => '18,4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 57,
            'chart_size_defenition_id' => 18,
            'size' => 'Q - Q 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 57,
            'chart_size_defenition_id' => 19,
            'size' => '18',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 57,
            'chart_size_defenition_id' => 20,
            'size' => '18,5',
        ]);
        // guide 58
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 58,
            'chart_size_defenition_id' => 17,
            'size' => '18,8',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 58,
            'chart_size_defenition_id' => 18,
            'size' => 'R - R 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 58,
            'chart_size_defenition_id' => 19,
            'size' => '19',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 58,
            'chart_size_defenition_id' => 20,
            'size' => '19',
        ]);
        // guide 59
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 59,
            'chart_size_defenition_id' => 17,
            'size' => '19,1',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 59,
            'chart_size_defenition_id' => 18,
            'size' => 'S',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 59,
            'chart_size_defenition_id' => 19,
            'size' => '20',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 59,
            'chart_size_defenition_id' => 20,
            'size' => '19',
        ]);
        // guide 60
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 60,
            'chart_size_defenition_id' => 17,
            'size' => '19,4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 60,
            'chart_size_defenition_id' => 18,
            'size' => 'S 1/2 - T',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 60,
            'chart_size_defenition_id' => 19,
            'size' => '21',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 60,
            'chart_size_defenition_id' => 20,
            'size' => '19,5',
        ]);
        // guide 61
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 61,
            'chart_size_defenition_id' => 17,
            'size' => '19,7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 61,
            'chart_size_defenition_id' => 18,
            'size' => 'T 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 61,
            'chart_size_defenition_id' => 19,
            'size' => '22',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 61,
            'chart_size_defenition_id' => 20,
            'size' => '20',
        ]);
        // guide 62
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 62,
            'chart_size_defenition_id' => 17,
            'size' => '20',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 62,
            'chart_size_defenition_id' => 18,
            'size' => 'U - U 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 62,
            'chart_size_defenition_id' => 19,
            'size' => '23',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 62,
            'chart_size_defenition_id' => 20,
            'size' => '20',
        ]);
        // guide 63
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 63,
            'chart_size_defenition_id' => 17,
            'size' => '20,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 63,
            'chart_size_defenition_id' => 18,
            'size' => 'V - V 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 63,
            'chart_size_defenition_id' => 19,
            'size' => '24',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 63,
            'chart_size_defenition_id' => 20,
            'size' => '20,5',
        ]);
        // guide 64
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 64,
            'chart_size_defenition_id' => 17,
            'size' => '20,6',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 64,
            'chart_size_defenition_id' => 18,
            'size' => 'W',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 64,
            'chart_size_defenition_id' => 19,
            'size' => '25',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 64,
            'chart_size_defenition_id' => 20,
            'size' => '20,5',
        ]);
        // guide 65
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 65,
            'chart_size_defenition_id' => 17,
            'size' => '21',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 65,
            'chart_size_defenition_id' => 18,
            'size' => 'W 1/2 - X',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 65,
            'chart_size_defenition_id' => 19,
            'size' => '26',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 65,
            'chart_size_defenition_id' => 20,
            'size' => '21',
        ]);
        // guide 66
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 66,
            'chart_size_defenition_id' => 17,
            'size' => '21,3',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 66,
            'chart_size_defenition_id' => 18,
            'size' => 'X 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 66,
            'chart_size_defenition_id' => 19,
            'size' => '27',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 66,
            'chart_size_defenition_id' => 20,
            'size' => '21,5',
        ]);
        // guide 67
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 67,
            'chart_size_defenition_id' => 17,
            'size' => '21,6',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 67,
            'chart_size_defenition_id' => 18,
            'size' => 'Y - Y 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 67,
            'chart_size_defenition_id' => 19,
            'size' => '28',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 2,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 67,
            'chart_size_defenition_id' => 20,
            'size' => '21,5',
        ]);


        // Hats
        // guide 68
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 21,
            'size' => '52',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 22,
            'size' => '6 3/8',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 23,
            'size' => '6 1/2',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 21,
            'size' => '53',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 22,
            'size' => '6 1/2',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 68,
            'chart_size_defenition_id' => 23,
            'size' => '6 5/8',
        ]);
        // guide 69
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 21,
            'size' => '54',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 22,
            'size' => '6 5/8',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 23,
            'size' => '6 3/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 21,
            'size' => '55',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 22,
            'size' => '6 3/4',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 69,
            'chart_size_defenition_id' => 23,
            'size' => '6 7/8',
        ]);
        // guide 70
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 21,
            'size' => '56',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 22,
            'size' => '6 7/8',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 23,
            'size' => '7',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 21,
            'size' => '57',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 22,
            'size' => '7',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 70,
            'chart_size_defenition_id' => 23,
            'size' => '7 1/8',
        ]);
        // guide 71
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 21,
            'size' => '58',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 22,
            'size' => '7 1/8',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 23,
            'size' => '7 1/4',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 21,
            'size' => '59',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 22,
            'size' => '7 1/4',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 3,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 71,
            'chart_size_defenition_id' => 23,
            'size' => '7 3/8',
        ]);


        // Gloves

        // guide 72
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 72,
            'chart_size_defenition_id' => 24,
            'size' => '4.5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 72,
            'chart_size_defenition_id' => 25,
            'size' => '15.5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 72,
            'chart_size_defenition_id' => 24,
            'size' => '5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 72,
            'chart_size_defenition_id' => 25,
            'size' => '16',
        ]);
        // guide 73
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 73,
            'chart_size_defenition_id' => 24,
            'size' => '5.5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 73,
            'chart_size_defenition_id' => 25,
            'size' => '16.5',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 73,
            'chart_size_defenition_id' => 24,
            'size' => '6',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 73,
            'chart_size_defenition_id' => 25,
            'size' => '17',
        ]);
        // guide 74
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 74,
            'chart_size_defenition_id' => 24,
            'size' => '6.5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 74,
            'chart_size_defenition_id' => 25,
            'size' => '18',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 74,
            'chart_size_defenition_id' => 24,
            'size' => '7',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 74,
            'chart_size_defenition_id' => 25,
            'size' => '19',
        ]);
        // guide 75
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 75,
            'chart_size_defenition_id' => 24,
            'size' => '7.5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 75,
            'chart_size_defenition_id' => 25,
            'size' => '20',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 75,
            'chart_size_defenition_id' => 24,
            'size' => '8',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 75,
            'chart_size_defenition_id' => 25,
            'size' => '22',
        ]);
        // guide 76
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 76,
            'chart_size_defenition_id' => 24,
            'size' => '8.5',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 76,
            'chart_size_defenition_id' => 25,
            'size' => '23',
        ]);

        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 76,
            'chart_size_defenition_id' => 24,
            'size' => '9',
        ]);
        $chartSize = ChartSize::create([
            'chart_size_category_id' => 4,
            'chart_size_gender_id' => 2,
            'chart_size_guide_id' => 76,
            'chart_size_defenition_id' => 25,
            'size' => '24',
        ]);
    }
}
