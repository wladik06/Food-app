<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            [
                'name' => 'Avocado salad bowl',
                'cooking time' => '15-20min',
                'category' => 'Healthy',
                'description' => 'Bulk out your bowl with any veggies you can find in the fridge also including chopped sweet potatoes and avocado.',
                'gallery' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            ],
            [
                'name' => 'Classic burger',
                'cooking time' => '20min',
                'category' => 'Fast food',
                'description' => 'Juicy, big classic American burger, loaded with toppings of your choice.',
                'gallery' => 'https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            ],
            [
                'name' => 'Frederique Constant',
                'cooking time' => '30min',
                'category' => 'Casual',
                'description' => 'Swordfish is perfect for hot-and-fast applications like this springy skillet topped with easy salad and delicious sauce.',
                'gallery' => 'https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            ]
        ]);
    }
}
