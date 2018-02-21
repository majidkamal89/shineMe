<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')
                ->references('id')->on('pages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->text('description')->nullable();
            $table->text('detail_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
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
        Schema::dropIfExists('services');
    }
}
