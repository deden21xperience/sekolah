<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
	return [
		'biodata_id' => $faker->randomDigitNotNull,
		// 'gelar_akademik_depan' => $faker->title, // diambil dari database indoenesia
		// 'gelar_akademik_belakang' => $faker->suffix, // diambil dari database indoenesia
		// 'gelar_kehormatan' => $faker, // diambil dari database indoenesia
		// 'nuptk' => $faker->randomDigitNotNull,
		// 'wali_kelas' => $faker->boolean,
		'subject_id' => rand(1, 20),
		// 'jabatan' => $faker->jobTitle, //diambil dari database indonesia
		'tgl_masuk' => $faker->date(),
	];
});
