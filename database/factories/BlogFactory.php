<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' =>$faker->title,
        'content' =>$faker->paragraph,
        'user_id' =>function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
