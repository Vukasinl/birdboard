<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'        =>  substr($faker->sentence, 0, -1),
        'description'  =>  $faker->paragraph,
        'user_id'      =>  function(){
            return factory(App\User::class)->create()->id;
        }
    ];
});
