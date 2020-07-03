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
        $users = [

            [
                'name' => 'Site Admin',
                "phone" => "090078601",
                'email' => 'siteadmin@admin.com',
                'password' => bcrypt("11111111"),
                "role_id" => 1,
            ],
            [
                'name' => 'Trainer',
                "phone" => "090078601",
                'email' => 'trainer@admin.com',
                'password' => bcrypt("11111111"),
                "role_id" => 2,
            ],
            [
                'name' => 'Site User',
                "phone" => "090078601",
                'email' => 'user@admin.com',
                'password' => bcrypt("11111111"),
                "role_id" => 3,
            ],
            ];

        foreach ($users as $user){
            $userModel = \App\User::create($user);
        }
    }
}
