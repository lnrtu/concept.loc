<?php

use Faker\Generator as Faker;

$factory->define(\App\Configs::class, function (Faker $faker) {
    return [
        'name' => 'keywords',
        'value' => 'Киев, Украина, тренажеры, магазин, цены, видео, обзоры, спорт, фитнес',
        'name_rus' => 'Тег Keywords'
    ];
});
