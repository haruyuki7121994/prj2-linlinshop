<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('images')->truncate();
        \DB::table('images')->insert([
            ['product_attr_id' => 1, 'url' => '/asset/images/frontend/giay/giay1.jpg'],
            ['product_attr_id' => 1, 'url' => '/asset/images/frontend/giay/giay2.jpg'],
            ['product_attr_id' => 1, 'url' => '/asset/images/frontend/giay/giay3.jpg'],
            ['product_attr_id' => 1, 'url' => '/asset/images/frontend/giay/giay4.jpg'],
        ]);
    }
}
