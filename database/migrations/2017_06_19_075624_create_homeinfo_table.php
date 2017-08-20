<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeinfoTable extends Migration
{
    /**
     */
    public function up()
    {
        Schema::create('homeinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('home_about');
            $table->text('home_words');
            $table->text('home_project');
            $table->text('home_advise');
            $table->text('home_image_1');
            $table->text('home_image_2');
            $table->timestamps();
        });
    }

    /**
     */
    public function down()
    {
        Schema::dropIfExists('homeinfos');
    }
}
