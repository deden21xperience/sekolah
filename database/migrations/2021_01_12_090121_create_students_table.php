<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('biodata_id');
            $table->date('tgl_masuk');
            $table->string('nisn');
            $table->string('nis');
            $table->integer('kelas_id');
            $table->tinyInteger('status'); //0 = keluar, 1 = masih aktif dan 3 = lulus
            $table->bigInteger('user_id'); //id user menggunakan nama lengkap disambung
            $table->string('nama_ayah'); //diambil dari table biodadata
            $table->string('nama_ibu'); //diambil dari table biodadata
            $table->string('nama_wali'); //diambil dari table biodadata
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
