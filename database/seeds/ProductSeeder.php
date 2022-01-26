<?php

use App\Product;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'aspirapolvere',              //casa1
                'thumb' => 'https://images.philips.com/is/image/philipsconsumer/42a94c9d14fa4e15a7b0ad14003adf9b?$jpglarge$&wid=960',
                'price' => '80',
                'genre' => 'electrodomestic',
            ],
            [
                'name' => 'set pentole',              //casa1
                'thumb' => 'https://cdn.verdelillahome.com/media/catalog/product/cache/2/image/1375x/9df78eab33525d08d6e5fb8d27136e95/7/1/713vu8oa4tl.jpg',
                'price' => '180',
                'genre' => 'kitchen',
            ],
            [
                'name' => 'armadio nero',              //casa1
                'thumb' => 'https://images.eprice.it/nobrand/0/hres/559/207524559/8718475593928_a_en_hd_1.jpg',
                'price' => '120',
                'genre' => 'work',
            ],
            [
                'name' => 'bicicletta',              //casa1
                'thumb' => 'https://www.vespashop-bestmotor.com/34323-large_default/myland-bicicletta-city-donna-28-6v-alluminio-tg-46-acqua-marina.jpg',
                'price' => '220',
                'genre' => 'lifestyle',
            ],
            [
                'name' => 'scrivania',              //casa1
                'thumb' => 'https://www.ikea.com/it/it/images/products/malm-scrivania-impiallacciato-rovere-mord-bianco__0735976_pe740310_s5.jpg?f=s',
                'price' => '90',
                'genre' => 'work',
            ],
            [
                'name' => 'occhiali da sole',              //casa1
                'thumb' => 'https://store.sscnapoli.it/428-medium_default/occhiali-da-sole-matt-frost-smoke.jpg',
                'price' => '60',
                'genre' => 'accessories',
            ]
            ];
            foreach($products as $Product){
                $_Product = new Product();
                $_Product->name = $Product['name'];
                $_Product->thumb = $Product['thumb'];
                $_Product->price = $Product['price'];
                $_Product->genre = $Product['genre'];
                $_Product->save();
            }
    }
}
