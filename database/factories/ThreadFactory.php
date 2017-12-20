<?php

use Faker\Generator as Faker;
use App\Thread;
use App\User;
use App\Channel;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
        'channel_id' => function(){
            return factory(Channel::Class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
     ];
});
