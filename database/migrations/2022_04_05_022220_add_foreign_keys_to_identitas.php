<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIdentitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('identitas', function (Blueprint $table) {
            //
            $table->foreign('users_id', 'users_id_fk11')->references
            ('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('kecamatans_id', 'kecamatans_id_fk12')->references
            ('id')->on('kecamatans')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('jns_pembinaans_id', 'jns_pembinaans_id_fk13')->references
            ('id')->on('jns_pembinaans')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('jns_kepemilikans_id', 'jns_kepemilikans_id_fk14')->references
            ('id')->on('jns_kepemilikans')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('jns_kesenians_id', 'jns_kesenians_id_fk15')->references
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
        Schema::table('identitas', function (Blueprint $table) {
            //
            $table->dropForeign('users_id_fk11');
            $table->dropForeign('kecamatans_id_fk12');
            $table->dropForeign('jns_pembinaans_id_fk13');
            $table->dropForeign('jns_kepemilikans_id_fk14');
            $table->dropForeign('jns_kesenians_id_fk15');
        });
    }
}
