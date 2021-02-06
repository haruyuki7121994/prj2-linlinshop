<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->truncate();
        \DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Giày', 'slug' => 'giay', 'is_active' => \App\Category::ACTIVE],
            ['id' => 2, 'name' => 'Dép', 'slug' => 'dep', 'is_active' => \App\Category::ACTIVE],
            ['id' => 3, 'name' => 'Đồng hồ', 'slug' => 'dong-ho', 'is_active' => \App\Category::ACTIVE],
            ['id' => 4, 'name' => 'Mắt kính', 'slug' => 'mat-kinh', 'is_active' => \App\Category::ACTIVE],
            ['id' => 5, 'name' => 'Nón', 'slug' => 'non', 'is_active' => \App\Category::ACTIVE],
            ['id' => 6, 'name' => 'Áo', 'slug' => 'ao', 'is_active' => \App\Category::ACTIVE],
            ['id' => 7, 'name' => 'Đầm', 'slug' => 'dam', 'is_active' => \App\Category::ACTIVE],
            ['id' => 8, 'name' => 'Quần', 'slug' => 'quan', 'is_active' => \App\Category::ACTIVE],
            ['id' => 9, 'name' => 'Váy', 'slug' => 'vay', 'is_active' => \App\Category::ACTIVE],
            ['id' => 10, 'name' => 'Túi xách', 'slug' => 'tui-xach', 'is_active' => \App\Category::ACTIVE],
            ['id' => 11, 'name' => 'Ví', 'slug' => 'vi', 'is_active' => \App\Category::ACTIVE],
            ['id' => 12, 'name' => 'Bộ đồ', 'slug' => 'bo-do', 'is_active' => \App\Category::ACTIVE],
        ]);
    }
}
