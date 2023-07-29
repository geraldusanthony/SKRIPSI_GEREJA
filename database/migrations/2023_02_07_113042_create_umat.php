<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_umat');
            $table->string('nama_bpts')->nullable();
            $table->string('tgl_bpts')->nullable();
            $table->string('paroki')->nullable();
            $table->string('wali_bpts')->nullable();
            $table->string('tgl_kp')->nullable();
            $table->string('paroki_kp')->nullable();
            $table->string('warga');
            $table->string('negara');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('jns_kelamin');
            $table->string('ling');
            $table->date('tgl_lahir');
            $table->string('tmp_lhr');
            $table->string('gol_darah');
            $table->string('alamat');
            $table->string('kota_kab');
            $table->string('kec');
            $table->string('kel');
            $table->string('no_hp');
            $table->string('email');
            $table->string('pend');
            $table->string('pekerjaan');
            $table->string('images');
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
        Schema::dropIfExists('umat');
    }
};
