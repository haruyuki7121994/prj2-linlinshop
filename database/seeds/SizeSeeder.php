<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sizes')->truncate();
        \DB::table('sizes')->insert([
            ['id' => 1, 'name' => 'XS', 'is_active' => \App\Size::ACTIVE],
            ['id' => 2, 'name' => 'S', 'is_active' => \App\Size::ACTIVE],
            ['id' => 3, 'name' => 'M', 'is_active' => \App\Size::ACTIVE],
            ['id' => 4, 'name' => 'L', 'is_active' => \App\Size::ACTIVE],
            ['id' => 5, 'name' => 'XL', 'is_active' => \App\Size::ACTIVE],
            ['id' => 6, 'name' => 'XXL', 'is_active' => \App\Size::ACTIVE],
        ]);
        \DB::table('sizes')->insert([
            ['id' => 7, 'name' => '36', 'is_active' => \App\Size::ACTIVE],
            ['id' => 8, 'name' => '37', 'is_active' => \App\Size::ACTIVE],
            ['id' => 9, 'name' => '38', 'is_active' => \App\Size::ACTIVE],
            ['id' => 10, 'name' => '39', 'is_active' => \App\Size::ACTIVE],
            ['id' => 11, 'name' => '40', 'is_active' => \App\Size::ACTIVE],
        ]);
        \DB::table('sizes')->insert([
            ['id' => 12, 'name' => 'Free', 'is_active' => \App\Size::ACTIVE],
        ]);
    }
}
