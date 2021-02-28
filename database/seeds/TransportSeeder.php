<?php

use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transports')->truncate();
        $provinces = \App\Province::IsActive()->get();
        foreach ($provinces as $province) {
            if ($province->type == 'Thành phố Trung ương')
                \App\Transport::create([
                    'province_id' => $province->id,
                    'price' => 5,
                ]);
            if ($province->type == 'Tỉnh')
                \App\Transport::create([
                    'province_id' => $province->id,
                    'price' => 10,
                ]);
        }
    }
}
