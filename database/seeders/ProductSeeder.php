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
                    'name' => 'Daniel Wellington',
                    'price' => '2000dkk',
                    'category' => 'Formal',
                    'description' => 'As delicate as it is powerful, it will adapt to your outfits, your styles, all in disconcerting elegance.',
                    'gallery' => 'https://assets.ajio.com/medias/sys_master/root/h1e/hf0/16304858759198/-1117Wx1400H-460616213-rosegold-MODEL.jpg',
                ],
                [
                    'name' => 'Paul Rich',
                    'price' => '2500dkk',
                    'category' => 'Designer',
                    'description' => 'The crimson red dial of the Sultan’s Ruby is a token of power and its gold case represents royalty.',
                    'gallery' => 'https://cdn.shopify.com/s/files/1/1273/4183/products/SultansRubyfront.jpg?v=1614874510',
                ],
                [
                    'name' => 'Frederique Constant',
                    'price' => '1500dkk',
                    'category' => 'Casual',
                    'description' => 'Dark brown calf leather strap that elevates the watch to a more formal accessory.',
                    'gallery' => 'https://alshayawatches.com/wp-content/uploads/2021/06/FC-0188.jpg',
                ]
        ]);
    }
}
