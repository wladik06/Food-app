<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                [
                    'name' => 'Half Baked Harvest - super simple',
                    'price' => '400dkk',
                    'author' => 'Tieghan Gerard',
                    'description' => 'Cooking book with recipes - description 1.',
                    'gallery' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQxLYxpDT5CPY7zsRwW_lOThD9EqFjI-XGOYlYrI8SjImxsgtny',
                ],
                [
                    'name' => 'Mastering the Art if French Cooking',
                    'price' => '500dkk',
                    'author' => 'Julia Child',
                    'description' => 'Cooking book with recipes - description 2.',
                    'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjttuCPumO-KrFJnFBrUOcFEzYAQKaYJ65Yx-CGR4i1SG83Js7',
                ],
                [
                    'name' => '5 Ingredients',
                    'price' => '700dkk',
                    'author' => 'Jamie Oliver',
                    'description' => 'Cooking book with recipes - description 2.',
                    'gallery' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQvmzkLKWQ3rs22_t1egfIBWeauDXJWya3ahFcsUFSLduNd9FFk',
                ]
        ]);
    }
}
