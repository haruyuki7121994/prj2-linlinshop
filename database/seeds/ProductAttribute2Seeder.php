<?php

use Illuminate\Database\Seeder;

class ProductAttribute2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_attributes')->insert([
            ['product_id' => 36, 'color_id' => 1, 'size_id' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 36, 'color_id' => 1, 'size_id' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 36, 'color_id' => 1, 'size_id' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 37, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 130],
            ['product_id' => 37, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 130],
            ['product_id' => 37, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 130],

            ['product_id' => 38, 'color_id' => 1, 'size_id' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 38, 'color_id' => 1, 'size_id' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 38, 'color_id' => 1, 'size_id' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 39, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 130],
            ['product_id' => 39, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 130],
            ['product_id' => 39, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 130],

            ['product_id' => 40, 'color_id' => 4, 'size_id' => 2, 'qty' => 10, 'price' => 350],
            ['product_id' => 40, 'color_id' => 4, 'size_id' => 3, 'qty' => 10, 'price' => 350],
            ['product_id' => 40, 'color_id' => 4, 'size_id' => 4, 'qty' => 10, 'price' => 350],

            ['product_id' => 41, 'color_id' => 10, 'size_id' => 2, 'qty' => 10, 'price' => 300],
            ['product_id' => 41, 'color_id' => 10, 'size_id' => 3, 'qty' => 10, 'price' => 300],
            ['product_id' => 41, 'color_id' => 10, 'size_id' => 4, 'qty' => 10, 'price' => 300],

            ['product_id' => 42, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 250],
            ['product_id' => 42, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 250],
            ['product_id' => 42, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 250],

            ['product_id' => 43, 'color_id' => 3, 'size_id' => 2, 'qty' => 10, 'price' => 230],
            ['product_id' => 43, 'color_id' => 3, 'size_id' => 3, 'qty' => 10, 'price' => 230],
            ['product_id' => 43, 'color_id' => 3, 'size_id' => 4, 'qty' => 10, 'price' => 230],

            ['product_id' => 44, 'color_id' => 3, 'size_id' => 2, 'qty' => 10, 'price' => 200],
            ['product_id' => 44, 'color_id' => 3, 'size_id' => 3, 'qty' => 10, 'price' => 200],
            ['product_id' => 44, 'color_id' => 3, 'size_id' => 4, 'qty' => 10, 'price' => 200],

            ['product_id' => 45, 'color_id' => 3, 'size_id' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 45, 'color_id' => 3, 'size_id' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 45, 'color_id' => 3, 'size_id' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 46, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 250],
            ['product_id' => 46, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 250],
            ['product_id' => 46, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 250],

            ['product_id' => 47, 'color_id' => 5, 'size_id' => 2, 'qty' => 10, 'price' => 260],
            ['product_id' => 47, 'color_id' => 5, 'size_id' => 3, 'qty' => 10, 'price' => 260],
            ['product_id' => 47, 'color_id' => 5, 'size_id' => 4, 'qty' => 10, 'price' => 260],

            ['product_id' => 48, 'color_id' => 5, 'size_id' => 2, 'qty' => 10, 'price' => 350],
            ['product_id' => 48, 'color_id' => 5, 'size_id' => 3, 'qty' => 10, 'price' => 350],
            ['product_id' => 48, 'color_id' => 5, 'size_id' => 4, 'qty' => 10, 'price' => 350],

            ['product_id' => 49, 'color_id' => 1, 'size_id' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 49, 'color_id' => 1, 'size_id' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 49, 'color_id' => 1, 'size_id' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 50, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 470],
            ['product_id' => 50, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 470],
            ['product_id' => 50, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 470],

            ['product_id' => 51, 'color_id' => 2, 'size_id' => 2, 'qty' => 10, 'price' => 200],
            ['product_id' => 51, 'color_id' => 2, 'size_id' => 3, 'qty' => 10, 'price' => 200],
            ['product_id' => 51, 'color_id' => 2, 'size_id' => 4, 'qty' => 10, 'price' => 200],


            ['product_id' => 52, 'color_id' => 12, 'size_id' => 2, 'qty' => 10, 'price' => 200],
            ['product_id' => 52, 'color_id' => 12, 'size_id' => 3, 'qty' => 10, 'price' => 200],
            ['product_id' => 52, 'color_id' => 12, 'size_id' => 4, 'qty' => 10, 'price' => 200],

            ['product_id' => 53, 'color_id' => 12, 'size_id' => 2, 'qty' => 10, 'price' => 400],
            ['product_id' => 53, 'color_id' => 12, 'size_id' => 3, 'qty' => 10, 'price' => 400],
            ['product_id' => 53, 'color_id' => 12, 'size_id' => 4, 'qty' => 10, 'price' => 400],

            ['product_id' => 54, 'color_id' => 12, 'size_id' => 2, 'qty' => 10, 'price' => 400],
            ['product_id' => 54, 'color_id' => 12, 'size_id' => 3, 'qty' => 10, 'price' => 400],
            ['product_id' => 54, 'color_id' => 12, 'size_id' => 4, 'qty' => 10, 'price' => 400],

            ['product_id' => 55, 'color_id' => 3, 'size_id' => 2, 'qty' => 10, 'price' => 200],
            ['product_id' => 55, 'color_id' => 3, 'size_id' => 3, 'qty' => 10, 'price' => 200],
            ['product_id' => 55, 'color_id' => 3, 'size_id' => 4, 'qty' => 10, 'price' => 200],

            ['product_id' => 56, 'color_id' => 12, 'size_id' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 56, 'color_id' => 12, 'size_id' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 56, 'color_id' => 12, 'size_id' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 57, 'color_id' => 13, 'size_id' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 57, 'color_id' => 13, 'size_id' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 57, 'color_id' => 13, 'size_id' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 58, 'color_id' => 3, 'size_id' => 2, 'qty' => 10, 'price' => 250],
            ['product_id' => 58, 'color_id' => 3, 'size_id' => 3, 'qty' => 10, 'price' => 250],
            ['product_id' => 58, 'color_id' => 3, 'size_id' => 4, 'qty' => 10, 'price' => 250],
            ['product_id' => 58, 'color_id' => 5, 'size_id' => 2, 'qty' => 10, 'price' => 250],
            ['product_id' => 58, 'color_id' => 5, 'size_id' => 3, 'qty' => 10, 'price' => 250],
            ['product_id' => 58, 'color_id' => 5, 'size_id' => 4, 'qty' => 10, 'price' => 250],

        ]);
    }
}
