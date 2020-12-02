<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('footer_text');
            $table->bigInteger('price');
            $table->string('image_url');
            $table->integer('name_color_id')->unsigned()->nullable();
            $table->integer('button_color_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('name_color_id')
            ->references('id')
            ->on('colors')
            ->onDelete('cascade');

            $table->foreign('button_color_id')
            ->references('id')
            ->on('colors')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paintings');
    }
}
