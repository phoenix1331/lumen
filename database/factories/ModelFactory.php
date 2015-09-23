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


//CREATE USER
$factory->define(App\User::class, function ($faker) {
    return [
            'name'     => 'Name Goes Here',
			'username' => 'Username Goes Here',
			'email'    => 'Email Goes Here',
			'profile_copy' => $faker->realText($maxNbChars = 400, $indexSize = 2),
			'photo' => 'avatar.jpg',
			//SET PASSWORD TO 123
			'password' => Hash::make('123'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime,
			'remember_token' => str_random(10)
    ];
});

//CREATE JOB
$factory->define(App\Job::class, function ($faker) {
    return [
            'name'     => 'Job Name Goes Here',
            'price' => 'Price Goes Here',
            'desc' => $faker->realText($maxNbChars = 400, $indexSize = 2),
            'photo' => 'avatar.jpg',
            'status' => 0,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
    ];
});

//CREATE SKILLS
$factory->define(App\Skill::class, function ($faker) {
    return [
            'skill_name'     => 'Skill Name Goes Here',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
    ];
});

//CREATE MESSAGE
// $factory->define(App\Message::class, function ($faker) {
//     return [
//             'message'     => 'Message Goes Here',
//             'created_at' => new DateTime,
//             'updated_at' => new DateTime
//     ];
// });
