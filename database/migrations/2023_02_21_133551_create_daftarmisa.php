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
        Schema::create('daftarmisa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jadwal');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('jns_klmn');
            $table->string('usia');
            $table->string('lingkungan');
            $table->string('duduk');
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
        Schema::dropIfExists('daftarmisa');
    }
};
