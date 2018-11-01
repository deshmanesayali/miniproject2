<?php
use Faker\Generator as Faker;
$factory->define(App\Car::class, function (Faker $faker) {
    return [
        //'make' => $faker->firstName(),
        'make' => $faker->randomElement(['firstName[]'=>'Ford', 'Honda', 'Toyota']),
        'model' => $faker->company(),
        'year' => $faker->date(),
    ];
    //$faker = factory(App\User::class)->model(['name[]'=>'ford', 'honda', 'toyota']);
});