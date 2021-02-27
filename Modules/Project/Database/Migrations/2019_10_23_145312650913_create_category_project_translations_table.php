<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProjectTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_project_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_project_id');

            $table->string('locale');
            $table->string('name');
            $table->unique(['category_project_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_project_translations');
    }
}
