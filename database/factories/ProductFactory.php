<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'detail'=>$faker->paragraph,
        'detail'=>$faker->paragraph,
        'price'=>$faker->numberbetween(100,1000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberbetween(2,30),
    ];
});
