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
        $users = [

            [
                'name' => 'Cooking',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Baking',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Swimming',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Driving',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Educational',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Mobile',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'IT',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Commerce',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],
    ];
        foreach ($users as $user){
            $userModel = \App\Models\Category::create($user);
        }
    }
}
