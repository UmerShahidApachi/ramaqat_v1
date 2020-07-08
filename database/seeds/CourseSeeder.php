<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
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
                'name' => 'example2',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "duration"=> "4500",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 1,
                "status"=>1


            ],[
                'name' => 'example17',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "duration"=> "4500",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 1,
                "status"=>1


            ],[
                'name' => 'example16',
                "duration"=> "4500",
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 1,
                "status"=>1


            ],[
                'name' => 'example14',
                "duration"=> "4500",
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 1,
                "status"=>1


            ],[
                'name' => 'example15',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "duration"=> "4500",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 1,
                "status"=>1


            ],[
                'name' => 'example14',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "duration"=> "4500",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 2,
                "status"=>1


            ],[
                "duration"=> "4500",
                'name' => 'example132',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 2,
                "status"=>1


            ],[
                'name' => 'example13',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "duration"=> "4500",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 2,
                "status"=>1


            ],[
                'name' => 'example14',
                "duration"=> "4500",
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 2,
                "status"=>1


            ],[
                'name' => 'example19',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "duration"=> "4500",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "user_id"=> 2,
                "category_id"=> 3,
                "status"=>1


            ],[
                'name' => 'example14',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "duration"=> "4500",
                "user_id"=> 2,
                "category_id"=> 3,
                "status"=>1


            ],[
                'name' => 'example10',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "duration"=> "4500",

                "user_id"=> 2,
                "category_id"=> 3,
                "status"=>1


            ],[
                'name' => 'example11',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "duration"=> "4500",

                "user_id"=> 2,
                "category_id"=> 3,
                "status"=>1


            ],[
                'name' => 'example12',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "duration"=> "4500",

                "user_id"=> 2,
                "category_id"=> 4,
                "status"=>1

            ],[
                'name' => 'example1',
                "thumbnail" => "5f0477834fedabe-your-expert-php-and-laravel-developer.png",
                "description"=> "best course to learn!",
                "price"=> "4500",
                "duration"=> "4500",
                "user_id"=> 2,
                "category_id"=> 4,
                "status"=>1


            ],
            ];
        foreach ($users as $user){
            $userModel = \App\Models\Course::create($user);
        }
    }
}
