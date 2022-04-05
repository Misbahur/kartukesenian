<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubKesenians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_kesenians', function (Blueprint $table) {
            //
            $table->foreign('jns_kesenians_id', 'jns_kesenians_id_fk16')->references
            ('id')->on('jns_kepemilikans')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_kesenians', function (Blueprint $table) {
            //
            $table->dropForeign('jns_kesenians_id_fk16');
        });
    }
}
