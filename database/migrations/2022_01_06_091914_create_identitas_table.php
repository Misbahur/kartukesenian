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
            $table->foreignId('users_id')->nullable()->index('users_id_fk11_idx');
            $table->string('nama');
            $table->string('no_induk')->nullable();
            $table->integer('rt');
            $table->integer('rw');
            $table->string('dusun');
            $table->string('desa');
            $table->foreignId('kecamatans_id')->nullable()->index('kecamatans_id_fk12_idx'); //ini integerasi table kecamatan
            $table->integer('kodepos');
            $table->foreignId('jns_pembinaans_id')->nullable()->index('jns_pembinaans_id_fk13_idx'); //ini integrasi table jenis pembinaan
            $table->string('sk_pendirian');
            $table->date('tanggal_pendirian');
            $table->foreignId('jns_kepemilikans_id')->nullable()->index('jns_kepemilikans_id_fk14_idx'); //ini integerasi table status kepemilikan
            $table->foreignId('jns_kesenians_id')->nullable()->index('jns_kesenians_id_fk15_idx'); //ini integerasi table jenis kesenina
            $table->string('tanah_milik');
            $table->string('tanah_bukan_milik');
            $table->enum('status', ['aktif', 'tidak']);
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
