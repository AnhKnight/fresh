<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_post_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_post_id');

            $table->string('locale');
            $table->string('name');
            $table->string('header_description')->nullable();
            $table->unique(['category_post_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post_translations');
    }
}
