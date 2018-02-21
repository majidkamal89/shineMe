<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_majors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->string('text')->nullable();
            $table->string('text_2')->nullable();
            $table->string('step_1')->nullable();
            $table->string('step_2')->nullable();
            $table->string('step_3')->nullable();
            $table->string('button_text')->nullable();
            $table->tinyInteger('type')->default(0)->comment('0=future_major_program, 1=future_major');
            $table->engine = 'InnoDB';
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
        Schema::dropIfExists('program_majors');
    }
}
