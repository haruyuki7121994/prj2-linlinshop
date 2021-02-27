<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin = \App\User::whereIsAdmin(\App\User::IS_ADMIN)->first();
        if (!$admin)
            \App\User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456'),
                'mobile' => '0333333333',
                'address' => '123',
                'province_id' => 1,
                'is_active' => \App\User::ACTIVE,
                'is_admin' => \App\User::IS_ADMIN,
            ]);

        //Example active user
        $exampleUser = \App\User::whereName('example')->first();
        if (!$exampleUser)
            \App\User::create([
                'name' => 'example',
                'email' => 'example@user.com',
                'password' => Hash::make('123456'),
                'mobile' => '0999999999',
                'address' => '123456',
                'is_active' => \App\User::ACTIVE,
                'province_id' => 1,
            ]);
    }
}
