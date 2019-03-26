<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('field_id')->index();
            $table->string('name');
            $table->text('values');
            $table->string('locale')->index();
            $table->timestamps();
        });

        Schema::table('field_translations', function (Blueprint $table) {
            $table->unique(['field_id','locale']);
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('field_translations', function (Blueprint $table) {
            $table->dropForeign(['field_id']);
        });
        Schema::dropIfExists('field_translations');
    }
}
