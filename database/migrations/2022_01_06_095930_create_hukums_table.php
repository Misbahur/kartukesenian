<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHukumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hukums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_id')->nullable()->index('identitas_id_fk8_idx');
            $table->string('no_akta');
            $table->date('penetapan_notaris');
            $table->string('pejabat_pengesah');
            $table->date('penetapan_kemenkumham');
            $table->string('no_pendaftaran_kemenkumham');
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
        Schema::dropIfExists('hukums');
    }
}
