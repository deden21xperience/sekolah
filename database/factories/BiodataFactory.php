<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Biodata;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Biodata::class, function (Faker $faker) {
    $intGender = rand(1, 2);
    if ($intGender == 1) {
        $jk = 'male';
        $jki = 'L';
    } else {
        $jk = 'female';
        $jki  = 'P';
    }
    $tes = DB::connection('mysql2');
    $provinsi = $tes->table('provinces')->select('name');
    return [
        'nama' => $faker->firstName($jk) . " " . $faker->lastName($jk),
        'jk' => $jki,
        'tpt_lahir' => $faker->city,
        'tgl_lahir' => $faker->date(),
        'alamat' => $faker->address, //diisi kampung/dusun, rt, rw
        'prov' => $tes, //dari database indonesia
        'kab' => $faker->city, //dari database indonesia
        'kec' => rand(1101010, 9471040), //dari database indonesia
        'desa' => rand(1101010001, 6171031001), //dari database indonesia
        'kodepos' => $faker->randomDigit, //dari database indonesia
        'nik' => $faker->nik(),
        'agama' => rand(1, 5), //dari database indonesia
        'pekerjaan' => rand(1, 88), //dari database indonesia
        'sekolah' => $faker->randomDigit, //diisi sekolah terakhir diambil dari database indonesia
        'foto' => $faker->imageUrl(),  //
    ];
});
