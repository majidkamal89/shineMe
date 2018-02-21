<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_name')->unique();
            $table->string('slug')->unique();
            $table->string('title_1')->nullable();
            $table->text('content_1')->nullable();
            $table->string('title_2')->nullable();
            $table->text('content_2')->nullable();
            $table->string('title_3')->nullable();
            $table->text('content_3')->nullable();
            $table->string('title_4')->nullable();
            $table->text('content_4')->nullable();
            $table->string('company_address')->nullable();
            $table->tinyInteger('contact_us_form')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('future_major')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('future_major_program')->default(0)->comment('0=No, 1=Yes');
            $table->integer('page_sequence')->unique()->comment('0=Home,1=About Us,2=General Message,3=Our Team,4=Services,5=News and Events,6=Contact Us');
            $table->string('file_name')->nullable()->comment('This should be blade file name');
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_property')->nullable();
            $table->string('robots')->default('index, follow');
            $table->tinyInteger('status')->default(1)->comment('1=Active, 0=In-Active');
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
        Schema::dropIfExists('pages');
    }
}
