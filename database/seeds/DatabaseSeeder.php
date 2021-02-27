<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(ColorSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(ProductAttributeSeeder::class);
         $this->call(ProductAttribute2Seeder::class);
         $this->call(ProductAttributeSeeder3::class);
         $this->call(CountrySeeder::class);
         $this->call(UserSeeder::class);
         $this->call(ImageSeeder::class);
    }
}
