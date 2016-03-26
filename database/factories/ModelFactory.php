<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\SuperUser::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->email,
		'password' => bcrypt(str_random(10)),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Admin::class, function(Faker\Generator $faker){
	return[
		'login'=>str_random(4),
		'name'=>$faker->name,
		'url'=> str_random(20),
		'remember_token'=>str_random(10),
		
	];

});

$factory->define(App\Guest::class, function( Faker\Generator $faker){
	return[
		'name' => $faker->name,
		'email' => $faker->email,
		'admin_id'=> $faker->numberBetween($min = 1, $max = 2),
		'token'=>str_random(50),
		'status'=> $faker->numberBetween($min = 0, $max = 1),
		
		
	];
});

$factory->define(App\Comment::class, function( Faker\Generator $faker){
	return[
		'admin_id' => $faker->numberBetween($min = 1, $max = 2),
		'content_blog_id' => $faker->numberBetween($min = 1, $max = 2),
		'text' => $faker->text,
		'name'=> $faker->name

	];
});

$factory->define(App\ContentBlog::class, function( Faker\Generator $faker){
	return[
		'admin_id' => $faker->numberBetween($min = 1, $max = 2),
		'title_html' => $faker->name,
		'text' => $faker->text,
	];
});
$factory->define(App\TodoList::class, function( Faker\Generator $faker){
	return[
		'todo' => $faker->name,
		'admin_id' => $faker->numberBetween($min = 1, $max = 2),
	];
});
$factory->define(App\Presentation::class, function( Faker\Generator $faker){
	return[
		'text' => $faker->text,
		'admin_id' => $faker->numberBetween($min = 1, $max = 2),
	];
});
