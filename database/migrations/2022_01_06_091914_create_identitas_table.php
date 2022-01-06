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
            $table->string('lintang');
            $table->string('bujur');
            $table->string('pembinaan_seni'); //ini integrasi table jenis pembinaan
            $tables->string('sk_pendirian');
            $table->date('tanggal_pendirian');
            $table->string('status_kepemilikan'); //ini integerasi table status kepemilikan
            $table->string('no_akta');
            $table->date('penetapan_notaris');
            $table->string('pejabat_pengesah');
            $table->date('penetapan_kemenkumham');
            $table->string('no_pendaftaran_kemenkumham');
            $table->integer('norek');
            $table->string('bank');
            $table->string('kcp_bank');
            $table->string('an_bank');
            $table->string('tanah_milik');
            $table->string('tanah_bukan_milik');
            $table->string('nama_wajib_pajak');
            $table->string('npwp');
            $table->string('no_telp');
            $table->string('no_fax');
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
