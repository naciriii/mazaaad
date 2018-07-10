<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNullableColumnsOnDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            //
            $table->dropColumn('phone');
            $table->dropColumn('first_name');
             $table->dropColumn('last_name');
           $table->dropColumn('identifier');



        });
        Schema::table('user_details', function (Blueprint $table) {
            //
            $table->string('phone')->nullable(true);
            $table->string('first_name')->nullable(true);
             $table->string('last_name')->nullable(true);
           $table->integer('identifier')->nullable(true);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            //
        });
    }
}
