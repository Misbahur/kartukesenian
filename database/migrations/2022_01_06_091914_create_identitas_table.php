<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_induk');
            $table->integer('rt');
            $table->integer('rt');
            $table->string('dusun');
            $table->string('desa');
            $table->string('kecamatan'); //ini integerasi table kecamatan
            $table->integer('kodepos');
            $table->string('pembinaan_seni'); //ini integrasi table jenis pembinaan
            $tables->string('sk_pendirian');
            $table->date('tanggal_pendirian');
            $table->string('status_kepemilikan'); //ini integerasi table status kepemilikan
            $table->string('tanah_milik');
            $table->string('tanah_bukan_milik');
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
        Schema::dropIfExists('identitas');
    }
}
