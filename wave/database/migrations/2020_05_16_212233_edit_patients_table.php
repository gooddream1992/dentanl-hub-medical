<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {            
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('level');
            $table->integer('user_id');
            $table->integer('studio_id');
            $table->enum('health_card', ['Yes','No']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function($table) {
            $table->string('name');
            $table->string('surname');
            $table->string('password');
            $table->string('email');
            $table->enum('level');
         });
    }
}
