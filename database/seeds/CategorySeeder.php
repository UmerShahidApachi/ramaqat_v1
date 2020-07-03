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
                'name' => 'Art',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'It&computing',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'health & fitness',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Interior design',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Language',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Sport',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Photography',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Education',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Engineering',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Cooking',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Sales',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Graphic design',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Marketing',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Finance',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Customer service',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Media',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Law',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Management',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Accountancy',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],[
                'name' => 'Skills',
                "logo" => "5ef9c4df329fbScreenshot2020-06-29at3.05.08PM.png",

            ],
    ];
        foreach ($users as $user){
            $userModel = \App\Models\Category::create($user);
        }
    }
}
