<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->truncate();
        \DB::table('colors')->insert([
            ['id' => 1, 'name' => 'Red', 'code' => '#bd1111', 'is_active' => \App\Color::ACTIVE],
            ['id' => 2, 'name' => 'White', 'code' => '#ffffff', 'is_active' => \App\Color::ACTIVE],
            ['id' => 3, 'name' => 'Black', 'code' => '#000000', 'is_active' => \App\Color::ACTIVE],
            ['id' => 4, 'name' => 'Brown', 'code' => '#6b3002', 'is_active' => \App\Color::ACTIVE],
            ['id' => 5, 'name' => 'Yellow', 'code' => '#fff200', 'is_active' => \App\Color::ACTIVE],
            ['id' => 6, 'name' => 'Nude', 'code' => '#daa06b', 'is_active' => \App\Color::ACTIVE],
            ['id' => 7, 'name' => 'Chocolate', 'code' => '#5c4937', 'is_active' => \App\Color::ACTIVE],
            ['id' => 8, 'name' => 'Gold', 'code' => '#ffd700', 'is_active' => \App\Color::ACTIVE],
            ['id' => 9, 'name' => 'Green', 'code' => '#478d61', 'is_active' => \App\Color::ACTIVE],
            ['id' => 10, 'name' => 'Pink', 'code' => '#f366c3', 'is_active' => \App\Color::ACTIVE],
            ['id' => 11, 'name' => 'Silver', 'code' => '#c0c0c0', 'is_active' => \App\Color::ACTIVE],
            ['id' => 12, 'name' => 'Blue', 'code' => '#19b5fe', 'is_active' => \App\Color::ACTIVE],
        ]);
    }
}
