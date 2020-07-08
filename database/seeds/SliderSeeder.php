<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
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
                'title' => 'Slider',
                "heading" => "Hello World",

                'image'=>'5f060c5311b84iso.png',

            ],[
                'title' => 'Slider',
                "heading" => "Hello World",

                'image'=>'5f060c6940c48note.png',

            ],[
                'title' => 'Slider',
                "heading" => "Hello World",

                'image'=>'5f060c7ab0865tips.png',

            ],
            ];
        foreach ($users as $user){
            $userModel = \App\Slider::create($user);
        }
    }
}
