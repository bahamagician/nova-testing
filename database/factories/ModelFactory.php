<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
        'price'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 2, $max = 9000)
    ];
});


$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'slug' => "Whaps",
        'parent_id' => 0
    ];
});


$factory->define(App\Image::class, function (Faker $faker) {

    $product = \App\Product::inRandomOrder()->first();

    return [
        'product_id' => $product->id,
        'sort_order' => 1,
        'featured_image' => 0,
        'url' => $faker->imageUrl($width = 640, $height = 480)
    ];

});

