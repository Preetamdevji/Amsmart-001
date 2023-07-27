<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sign_up', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('last_name',50);
            $table->string('email',50);
            $table->string('password',255);
            $table->string('mobile',50);
            $table->string('country',50);
            $table->string('city',50);
            $table->string('address');
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
        Schema::dropIfExists('sign_up');
    }
}
