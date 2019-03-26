<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('field_id')->index();
            $table->unsignedInteger('item_id')->index();
            $table->text('value')->nullable();
            $table->timestamps();
        });

        Schema::table('field_item', function (Blueprint $table) {
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('field_item', function (Blueprint $table) {
            $table->dropForeign(['field_id']);
            $table->dropForeign(['item_id']);
        });
        Schema::dropIfExists('field_item');
    }
}
