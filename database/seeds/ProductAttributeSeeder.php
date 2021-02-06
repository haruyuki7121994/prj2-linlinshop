<?php

use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_attributes')->truncate();
        \DB::table('product_attributes')->insert([
            ['product_id' => 1, 'color_id' => 2, 'size' => 7, 'qty' => 10, 'price' => 200],
            ['product_id' => 1, 'color_id' => 2, 'size' => 8, 'qty' => 10, 'price' => 200],
            ['product_id' => 1, 'color_id' => 2, 'size' => 9, 'qty' => 10, 'price' => 200],
            ['product_id' => 1, 'color_id' => 2, 'size' => 10, 'qty' => 10, 'price' => 200],
            ['product_id' => 1, 'color_id' => 2, 'size' => 11, 'qty' => 10, 'price' => 200],

            ['product_id' => 2, 'color_id' => 2, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 2, 'color_id' => 2, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 2, 'color_id' => 2, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 2, 'color_id' => 2, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 2, 'color_id' => 2, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 3, 'color_id' => 2, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 2, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 2, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 2, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 2, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 3, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 3, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 3, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 4, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 4, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 4, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 4, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 4, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 5, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 5, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 5, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 5, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 5, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 6, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 6, 'color_id' => 5, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 5, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 5, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 5, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 5, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 6, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 6, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 7, 'color_id' => 7, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 7, 'color_id' => 7, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 7, 'color_id' => 7, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 7, 'color_id' => 7, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 7, 'color_id' => 7, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 8, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 8, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 8, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 9, 'color_id' => 8, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 9, 'color_id' => 8, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 9, 'color_id' => 8, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 9, 'color_id' => 8, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 9, 'color_id' => 8, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 11, 'color_id' => 4, 'size' => 7, 'qty' => 10, 'price' => 200],
            ['product_id' => 11, 'color_id' => 4, 'size' => 8, 'qty' => 10, 'price' => 200],
            ['product_id' => 11, 'color_id' => 4, 'size' => 9, 'qty' => 10, 'price' => 200],
            ['product_id' => 11, 'color_id' => 4, 'size' => 10, 'qty' => 10, 'price' => 200],
            ['product_id' => 11, 'color_id' => 4, 'size' => 11, 'qty' => 10, 'price' => 200],

            ['product_id' => 12, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 12, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 12, 'color_id' => 9, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 9, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 9, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 9, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 12, 'color_id' => 9, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 13, 'color_id' => 8, 'size' => 7, 'qty' => 10, 'price' => 150],
            ['product_id' => 13, 'color_id' => 8, 'size' => 8, 'qty' => 10, 'price' => 150],
            ['product_id' => 13, 'color_id' => 8, 'size' => 9, 'qty' => 10, 'price' => 150],
            ['product_id' => 13, 'color_id' => 8, 'size' => 10, 'qty' => 10, 'price' => 150],
            ['product_id' => 13, 'color_id' => 8, 'size' => 11, 'qty' => 10, 'price' => 150],

            ['product_id' => 14, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 150],

            ['product_id' => 14, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 150],
            ['product_id' => 14, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 150],

            ['product_id' => 15, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 15, 'color_id' => 4, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 4, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 4, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 4, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 15, 'color_id' => 4, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 16, 'color_id' => 4, 'size' => 7, 'qty' => 10, 'price' => 120],
            ['product_id' => 16, 'color_id' => 4, 'size' => 8, 'qty' => 10, 'price' => 120],
            ['product_id' => 16, 'color_id' => 4, 'size' => 9, 'qty' => 10, 'price' => 120],
            ['product_id' => 16, 'color_id' => 4, 'size' => 10, 'qty' => 10, 'price' => 120],
            ['product_id' => 16, 'color_id' => 4, 'size' => 11, 'qty' => 10, 'price' => 120],

            ['product_id' => 17, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 210],

            ['product_id' => 17, 'color_id' => 6, 'size' => 7, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 6, 'size' => 8, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 6, 'size' => 9, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 6, 'size' => 10, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 6, 'size' => 11, 'qty' => 10, 'price' => 210],

            ['product_id' => 17, 'color_id' => 10, 'size' => 7, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 10, 'size' => 8, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 10, 'size' => 9, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 10, 'size' => 10, 'qty' => 10, 'price' => 210],
            ['product_id' => 17, 'color_id' => 10, 'size' => 11, 'qty' => 10, 'price' => 210],

            ['product_id' => 19, 'color_id' => 4, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 4, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 4, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 4, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 4, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 19, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 100],
            ['product_id' => 19, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 100],

            ['product_id' => 20, 'color_id' => 2, 'size' => 7, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 2, 'size' => 8, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 2, 'size' => 9, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 2, 'size' => 10, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 2, 'size' => 11, 'qty' => 10, 'price' => 180],

            ['product_id' => 20, 'color_id' => 3, 'size' => 7, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 3, 'size' => 8, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 3, 'size' => 9, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 3, 'size' => 10, 'qty' => 10, 'price' => 180],
            ['product_id' => 20, 'color_id' => 3, 'size' => 11, 'qty' => 10, 'price' => 180],

            ['product_id' => 22, 'color_id' => 8, 'size' => 12, 'qty' => 10, 'price' => 430],
            ['product_id' => 22, 'color_id' => 11, 'size' => 12, 'qty' => 10, 'price' => 430],

            ['product_id' => 23, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 270],

            ['product_id' => 21, 'color_id' => 8, 'size' => 12, 'qty' => 10, 'price' => 430],
            ['product_id' => 21, 'color_id' => 11, 'size' => 12, 'qty' => 10, 'price' => 430],

            ['product_id' => 24, 'color_id' => 8, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 24, 'color_id' => 12, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 24, 'color_id' => 10, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 24, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 310],

            ['product_id' => 25, 'color_id' => 12, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 25, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 25, 'color_id' => 10, 'size' => 12, 'qty' => 10, 'price' => 310],

            ['product_id' => 26, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 310],
            ['product_id' => 26, 'color_id' => 11, 'size' => 12, 'qty' => 10, 'price' => 310],

            ['product_id' => 27, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 310],

            ['product_id' => 28, 'color_id' => 4, 'size' => 12, 'qty' => 10, 'price' => 310],

            ['product_id' => 29, 'color_id' => 2, 'size' => 12, 'qty' => 10, 'price' => 300],
            ['product_id' => 29, 'color_id' => 3, 'size' => 12, 'qty' => 10, 'price' => 300],

            ['product_id' => 30, 'color_id' => 10, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 30, 'color_id' => 10, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 30, 'color_id' => 10, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 31, 'color_id' => 10, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 31, 'color_id' => 10, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 31, 'color_id' => 10, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 32, 'color_id' => 2, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 32, 'color_id' => 2, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 32, 'color_id' => 2, 'size' => 4, 'qty' => 10, 'price' => 100],
            ['product_id' => 32, 'color_id' => 3, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 32, 'color_id' => 3, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 32, 'color_id' => 3, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 33, 'color_id' => 5, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 33, 'color_id' => 5, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 33, 'color_id' => 5, 'size' => 4, 'qty' => 10, 'price' => 100],
            ['product_id' => 33, 'color_id' => 2, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 33, 'color_id' => 2, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 33, 'color_id' => 2, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 34, 'color_id' => 1, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 1, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 1, 'size' => 4, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 3, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 3, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 3, 'size' => 4, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 5, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 5, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 5, 'size' => 4, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 4, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 4, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 4, 'size' => 4, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 2, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 2, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 2, 'size' => 4, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 12, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 12, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 34, 'color_id' => 12, 'size' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 35, 'color_id' => 5, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 35, 'color_id' => 5, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 35, 'color_id' => 5, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 77, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 77, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 77, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 78, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 78, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 78, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 79, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 130],
            ['product_id' => 79, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 130],
            ['product_id' => 79, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 130],

            ['product_id' => 80, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 100],
            ['product_id' => 80, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 100],
            ['product_id' => 80, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 100],

            ['product_id' => 81, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 81, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 81, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 82, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 82, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 82, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 120],

            ['product_id' => 83, 'color_id' => 13, 'size' => 2, 'qty' => 10, 'price' => 120],
            ['product_id' => 83, 'color_id' => 13, 'size' => 3, 'qty' => 10, 'price' => 120],
            ['product_id' => 83, 'color_id' => 13, 'size' => 4, 'qty' => 10, 'price' => 120],

        ]);
    }
}
