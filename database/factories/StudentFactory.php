<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'biodata_id' => $faker->randomDigitNotNull,
        'tgl_masuk' => date('2018/02/07'),
        'nisn' => $faker->randomDigitNotNull,
        'nis' => $faker->randomDigitNotNull,
        'kelas_id' => $faker->randomDigitNotNull,
        'status' => rand(0, 2), //0 = keluar, 1 = masih aktif dan 3 = lulus
        'user_id' => $faker->randomDigitNotNull, //id user menggunakan nama lengkap disambung
        'nama_ayah' => $faker->name('male'), //diambil dari table biodadata
        'nama_ibu' => $faker->name('female'), //diambil dari table biodadata
        'nama_wali' => $faker->name, //diambil dari table biodadata
    ];
});
