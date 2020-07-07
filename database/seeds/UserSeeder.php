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
                'image'=>'5f0312f052d81947e5b0aa4c3b5053a4dcc5b0aaf9439ec760b14r1-250-250v2_00.jpg',

            ],
            [
                'name' => 'Trainer',
                "phone" => "090078601",
                'email' => 'trainer@admin.com',
                'password' => bcrypt("11111111"),
                "role_id" => 3,
                "is_trainer" => 1,
                'image'=>'5f0312f052d81947e5b0aa4c3b5053a4dcc5b0aaf9439ec760b14r1-250-250v2_00.jpg',
            ],
            [
                'name' => 'Site User',
                "phone" => "090078601",
                'email' => 'user@admin.com',
                'password' => bcrypt("11111111"),
                "role_id" => 3,
                'image'=>'5f0312f052d81947e5b0aa4c3b5053a4dcc5b0aaf9439ec760b14r1-250-250v2_00.jpg',

            ],
            ];

        foreach ($users as $user){
            $userModel = \App\User::create($user);
        }
    }
}
