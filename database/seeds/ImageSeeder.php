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
        $sql = file_get_contents('database/seeds/image.sql');
        DB::unprepared($sql);
    }
}
