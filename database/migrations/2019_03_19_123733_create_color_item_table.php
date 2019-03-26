<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_id')->index();
            $table->unsignedInteger('color_id')->index();
            $table->timestamps();
        });

        Schema::table('color_item', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('color_item', function (Blueprint $table) {
            $table->dropForeign(['item_id']);
            $table->dropForeign(['color_id']);
        });
        Schema::dropIfExists('color_item');
    }
}
