<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengalamanKaryas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengalaman_karyas', function (Blueprint $table) {
            //
            $table->foreign('identitas_id', 'identitas_id_fk2')->references
            ('id')->on('identitas')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengalaman_karyas', function (Blueprint $table) {
            //
            $table->dropForeign('identitas_id_fk2');
        });
    }
}
