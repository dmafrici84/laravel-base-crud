<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker -> sentence($nbWords = 3, $variableNbWords = false),
      'text' => $faker -> text($maxNbChars = 150) ,
      'category'=> $faker -> word(),
      'like' => $faker -> numberBetween($min = 0, $max = 500),
      'dislike' => $faker -> numberBetween($min = 0, $max = 500)
    ];
});
