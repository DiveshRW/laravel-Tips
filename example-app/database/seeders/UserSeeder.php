<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Blog;
use App\Models\Image;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1)
            // $faker = \Faker\Factory::create();
            // for($i=1;$i<=100;$i++){
            //     \App\Models\User::create([
            //       'name'=> $faker->name,
            //       'email' => $faker->email,
            //       'password'=> bcrypt('password'),
            //        'email_verified_at' => now(),
            //        'remember_token' => Str::random(10)
            //   ]);
            // }

       //  //2) More Faster
       //  \App\Models\User::factory(100)->create();
       // //3) Method 
       //  // User::factory()->times(100)->create();

        //User seeding with relatioships
            User::factory(10)
                ->create()
                ->each(function ($user){
                    Blog::factory()
                    ->create(['user_id' => $user->id])
                  ->each(function ($blog){  
                    Image::factory()
                    ->create(['blog_id' => $blog->id]);             
                });
              });
    }
}
