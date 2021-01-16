<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Biodata;
use Faker\Generator as Faker;

$factory->define(Biodata::class, function (Faker $faker) {
    $intGender = rand(1, 2);
    if ($intGender == 1) {
        $jk = 'male';
        $jki = 'L';
    } else {
        $jk = 'female';
        $jki  = 'P';
    }

    return [
        'nama' => $faker->firstName($jk) . " " . $faker->lastName($jk),
        'jk' => $jki,
        'tpt_lahir' => $faker->city,
        'tgl_lahir' => $faker->date(),
        'alamat' => $faker->address, //diisi kampung/dusun, rt, rw
        'prov_id' => rand(11, 94), //dari database indonesia
        'kab_id' => rand(1101, 9471), //dari database indonesia
        'kec_id' => rand(1101010, 9471040), //dari database indonesia
        'desa_id' => rand(1101010001, 6171031001), //dari database indonesia
        'kodepos_id' => $faker->randomDigit, //dari database indonesia
        'nik' => $faker->nik(),
        'agama_id' => rand(1, 5), //dari database indonesia
        'pekerjaan_id' => rand(1, 88), //dari database indonesia
        'sekolah_id' => $faker->randomDigit, //diisi sekolah terakhir diambil dari database indonesia
        'foto' => $faker->imageUrl(),  //
    ];
});
