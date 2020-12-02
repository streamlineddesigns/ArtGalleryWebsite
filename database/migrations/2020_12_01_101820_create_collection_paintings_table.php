<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionPaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_paintings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('collection_id')->unsigned();
            $table->integer('painting_id')->unsigned();
            $table->timestamps();

            $table->foreign('collection_id')
            ->references('id')
            ->on('collections')
            ->onDelete('cascade');

            $table->foreign('painting_id')
            ->references('id')
            ->on('paintings')
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
        Schema::dropIfExists('collection_paintings');
    }
}
