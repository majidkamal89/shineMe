<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramMajorListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_major_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')
                ->references('id')->on('program_majors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->text('description')->nullable();
            $table->string('title_1')->nullable();
            $table->text('content_1')->nullable();
            $table->string('title_2')->nullable();
            $table->text('content_2')->nullable();
            $table->string('title_3')->nullable();
            $table->text('content_3')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_major_lists');
    }
}
