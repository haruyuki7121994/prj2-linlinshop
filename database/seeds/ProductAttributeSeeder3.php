<?php

use Illuminate\Database\Seeder;

class ProductAttributeSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_attributes')->insert([
            ['product_id' => 59, 'color_id' => 5, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 59, 'color_id' => 10, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 59, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 59, 'color_id' => 1, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 59, 'color_id' => 6, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 59, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 100],

            ['product_id' => 61, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 260],
            ['product_id' => 61, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 260],
            ['product_id' => 61, 'color_id' => 1, 'size' => 12, 'qty' => 10, 'price' => 260],
            ['product_id' => 61, 'color_id' => 9, 'size' => 12, 'qty' => 10, 'price' => 260],

            ['product_id' => 62, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 480],

            ['product_id' => 63, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 390],

            ['product_id' => 64, 'color_id' => 7, 'size' => 12, 'qty' => 10, 'price' => 150],

            ['product_id' => 65, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 120],

            ['product_id' => 66, 'color_id' => 5, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 66, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 66, 'color_id' => 1, 'size' => 12, 'qty' => 10, 'price' => 100],

            ['product_id' => 67, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 100],

            ['product_id' => 68, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 150],

            ['product_id' => 69, 'color_id' => 10, 'size' => 12, 'qty' => 10, 'price' => 120],
            ['product_id' => 69, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 120],
            ['product_id' => 69, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 120],

            ['product_id' => 70, 'color_id' => 11, 'size' => 12, 'qty' => 10, 'price' => 100],

            ['product_id' => 71, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 400],

            ['product_id' => 72, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 260],

            ['product_id' => 73, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 280],
            ['product_id' => 73, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 280],

            ['product_id' => 74, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 100],
            ['product_id' => 74, 'color_id' => 10, 'size' => 12, 'qty' => 10, 'price' => 100],

            ['product_id' => 75, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 185],

            ['product_id' => 76, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 185],
        ]);
    }
}
