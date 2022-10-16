<?php
//Laravel Factory
// =====================================
// 1)seeding data manually
// - fake seed 100 users
	//FakerUsersSeeder
	$faker = \Faker\Factory::create();
	for($i=1;$i<=100;$i++){
	\App\User::create([
		'name'=> $faker->name,
		'email' => $faker->email->unique(),
		'password'=> bcrypt('password'),
	]);
}
//Command php artisan db:seed --class=FakeUserSeeder

//2)Using Factory =>More faster than seeder
\App\Models\User::factory(100)->create();

//php artisan migrate:fresh --seed -->delete all tables and seed 
//fakerusername 'username' => fake()->username(),
//faker text   'text' => fake()->text(30),
//call UserSeeder in Database seeder  == $this->call(UserSeeder::class);


