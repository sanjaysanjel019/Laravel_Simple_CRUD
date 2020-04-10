<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name' => 'Cultural Item 5',
            'details' => 'This item is used to get the home',
            'price' => 200
        ]);

        Product::create([
            'name' => 'Cultural Item 23',
            'details' => 'This iasastfind the value',
            'price' => 999
        ]);

        Product::create([
            'name' => 'Donatable Item 8',
            'details' => 'No we cansaott donate this item',
            'price' => 1452
        ]);

        Product::create([
            'name' => 'UnDonatable Item 6',
            'details' => 'Yes we can donate this item but under strict authentication',
            'price' => 1234
        ]);

        Product::create([
            'name' => 'Cultural Item 45',
            'details' => 'This 2325item is used to get the home',
            'price' => 250
        ]);

        Product::create([
            'name' => 'Cultural Item 2233',
            'details' => 'This iasastfind the value',
            'price' => 9991
        ]);

        Product::create([
            'name' => 'Donatable Non-Item 38',
            'details' => 'No we cansyes aott donate this item',
            'price' => 143
        ]);

        Product::create([
            'name' => 'Donatable Item 8453',
            'details' => 'No we cansaott donate this item',
            'price' => 1452
        ]);

        Product::create([
            'name' => 'UnDonatable Item ee6',
            'details' => 'Yes we can donate this item but under strict authentication',
            'price' => 1234
        ]);

        Product::create([
            'name' => 'Cultural Item faf45',
            'details' => 'This 2325item is used to get the home',
            'price' => 250
        ]);

        Product::create([
            'name' => 'Culturasasal Item 223',
            'details' => 'This iasastfind the value',
            'price' => 9991
        ]);

        Product::create([
            'name' => 'Donatasable Non-Item 8',
            'details' => 'No we cansyes aott donate this item',
            'price' => 143
        ]);

        Product::create([
            'name' => 'UnDonatable Item 66',
            'details' => 'Yes we can donate this item but under strict authentication',
            'price' => 12364
        ]);
    }
}
