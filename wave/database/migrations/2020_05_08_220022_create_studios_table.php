<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('legal_address');
            $table->string('legal_city');
            $table->string('legal_country');
            $table->string('studio_address')->nullable();
            $table->string('studio_city')->nullable();
            $table->string('studio_country')->nullable();
            $table->string('phone');
            $table->string('mobile_phone');
            $table->string('email')->unique();
            $table->string('vat_code');
            $table->string('password');
            $table->string('sdi_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('studios');
    }
}
