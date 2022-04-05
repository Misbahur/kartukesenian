<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLokasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokasis', function (Blueprint $table) {
            //
            $table->foreign('identitas_id', 'identitas_id_fk7')->references
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
        Schema::table('lokasis', function (Blueprint $table) {
            //
            $table->dropForeign('identitas_id_fk7');
        });
    }
}
