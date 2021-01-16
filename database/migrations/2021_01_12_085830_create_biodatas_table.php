<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tpt_lahir');
            $table->string('jk');
            $table->date('tgl_lahir');
            $table->string('alamat'); //diisi kampung/dusun, rt, rw
            $table->smallInteger('prov_id'); //dari database indonesia
            $table->smallInteger('kab_id'); //dari database indonesia
            $table->integer('kec_id'); //dari database indonesia
            $table->bigInteger('desa_id'); //dari database indonesia
            $table->smallInteger('kodepos_id'); //dari database indonesia
            $table->bigInteger('nik');
            $table->tinyInteger('agama_id'); //dari databsase indonesia
            $table->integer('pekerjaan_id'); //dari database indonesia
            $table->bigInteger('sekolah_id'); //diisi sekolah terakhir diambil dari database indonesia
            $table->string('foto');  //default gambar untuk laki2 dan perempuan
            $table->unsignedBigInteger('biodataable')->nullable();
            $table->string('biodatatype')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
