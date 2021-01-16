<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classroom;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {
    // $nilaiAwal;
    $kelas = [
        "X TKR",
        "X TSM A",
        "X TSM B",
        "X TKJ A",
        "X TKJ B",
        "X TKJ C",
        "X TKJ D",
        "X OTKP",
        "X AK",
    ];
    return [
        'classroom' => $kelas[0],
        'teacher_id' => rand(1, 2)
    ];
});
