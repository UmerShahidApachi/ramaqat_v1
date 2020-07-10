<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [


                'about_us_description' => "<h1><strong>اشكرك أ.دانة عالطرح الرائع حقيقة استفدت من كلامك كثير واتمنى لو<br />
&nbsp;&nbsp;&nbsp; احضر</strong></h1>

<p>&nbsp;</p>

<h1><strong>عندك دورة مباشرة احس راح تضيفين لي الكثييير</strong></h1>",
                "about_us_image" => "5f009ffcb3c3eMaskGroup1.png",
                "fb_link"=> "https://www.facebook.com/",
                "insta_link"=> "https://www.instagram.com/",
                "twitter_link"=> "https://twitter.com/explore",
                "in_link"=> "https://www.linkedin.com/",
                 "contact_us_description" => "By connecting students all over the world to the best instructors, Udemy is helping individuals reach their goals and pursue their dreams",
                "contact_address"=>"14 street dubai",
            "contact_phone"=>"+1232239344",
            "contact_city"=>"Dubai,UAE",
            "contact_email"=>"contact@ramaqat.com",
            "contact_us_image"=>"5f06e7b494056office.png",
            ];
        $category = Setting::create($users);
    }
}
