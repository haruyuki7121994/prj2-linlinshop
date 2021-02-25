<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('provinces')->truncate();
        $sql = file_get_contents('database/seeds/city.sql');
        DB::unprepared($sql);
        \App\Province::whereIsActive(\App\Province::INACTIVE)
            ->update(['is_active' => \App\Province::ACTIVE]);
    }
}
