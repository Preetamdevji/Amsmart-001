<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home__sliders', function (Blueprint $table) {
            $table->id();
            $table->string('top_title',30);
            $table->string('title',30);
            $table->text('flag');
            $table->string('button',40);
            $table->string('slider_image',50);
            $table->string('status',30);
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
        Schema::dropIfExists('home__sliders');
    }
}
