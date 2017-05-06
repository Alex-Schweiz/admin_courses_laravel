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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Teacher::class, function(Faker\Generator $faker) {

	return [
		'name' => $faker->name,
		'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'sex' => $faker->boolean,
		'email' => $faker->email,
		'phone' => $faker->e164PhoneNumber,
		'address' => $faker->streetAddress,
		'notes' => $faker->paragraph(5),
		'photo' => $faker->imageUrl($width = 640, $height = 640, 'people'),
		'department' => 'Teachers',
		'occupation' => $faker->randomElement($array = array ('Junior English Teacher','Middle English Teacher','Kids Teacher')),
		'date_of_joining' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'salary' => $faker->numberBetween($min = 150, $max = 250)
	];
});
