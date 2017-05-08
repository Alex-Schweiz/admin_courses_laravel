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
		'gender' => $faker->boolean,
		'email' => $faker->email,
		'phone' => $faker->e164PhoneNumber,
		'address' => $faker->streetAddress,
		'notes' => $faker->paragraph(5),
		'photo' => $faker->imageUrl($width = 640, $height = 640, 'people'),
		'department' => 'Teachers',
		'occupation' => $faker->randomElement($array = array ('Junior English Teacher','Middle English Teacher','Kids Teacher')),
		'date_of_joining' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'salary' => $faker->numberBetween($min = 150, $max = 250),
		'fired' => $faker->boolean,
	];
});

$factory->define(App\CurrentGroups::class, function(Faker\Generator $faker) {

	return [
		'teacher_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
		'group_level' => $faker->randomElement($array = array ('A1','A2','B1','B2','C1')),
		'group_type' => $faker->randomElement($array = array ('Adult group','Kids group','Intensive course','Speaking club')),
		'department' => $faker->randomElement($array = array ('English Language','German Language','French Language')),
		'start_date' => $faker->randomElement($array = array ('2017-01-01','2017-02-01','2017-03-01','2017-04-01','2017-05-01')),
		'finish_date' => $faker->randomElement($array = array ('2017-06-01','2017-07-01','2017-08-01','2017-09-01','2017-10-01'))
	];
});

$factory->define(App\Awards::class, function(Faker\Generator $faker) {

	return [
		'teacher_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
		'name' => $faker->randomElement($array = array ('Teacher of the month','Best Teacher of the month','Amazing Teacher of the month','Miss teacher')),
		'reward' => $faker->numberBetween($min = 50, $max = 100)
	];
});

$factory->define(App\Students::class, function(Faker\Generator $faker) {

	return [
		'user_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
		'current_groups_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
		'name' => $faker->name,
		'photo' => $faker->imageUrl($width = 640, $height = 640, 'people')
	];
});
