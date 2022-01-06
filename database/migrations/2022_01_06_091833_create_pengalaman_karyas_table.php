<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanKaryasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_karyas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('tahundiciptakan');
            $table->string('penata_tari');
            $table->string('penata_musik');
            $table->string('penata_rias');
            $table->string('penata_busana');
            $table->string('sinopsis');
            $table->string('history_tampil');
            $table->string('link_video');
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
        Schema::dropIfExists('pengalaman_karyas');
    }
}
