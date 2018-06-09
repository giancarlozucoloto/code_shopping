<?php

use Faker\Generator as Faker;

$factory->define(CodeShopping\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => 'slug',
        'description' => $faker->text(200),
        'price' => $faker->numberBetween($min = 30, $max = 100),
        'stock' => $faker->numberBetween($min = 1, $max = 100),
        'active' => $faker->numberBetween($min = 1, $max = 2)

    ];
});


