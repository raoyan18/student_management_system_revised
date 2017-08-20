<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->integer('student_user_id_fkey');
            $table->integer('student_roll')->nullable();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('student_photo')->nullable();
            $table->string('student_adviser_supervisor')->nullable();
            $table->string('student_cell')->nullable();
            $table->string('student_guardian_name')->nullable();
            $table->string('student_guardian_email')->nullable();
            $table->string('student_guardian_cell')->nullable();
            $table->string('student_present_address')->nullable();
            $table->string('student_permanent_address')->nullable();
            $table->string('student_achievement')->nullable();
            $table->integer('student_approved')->default(0);
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
        Schema::drop('students');
    }
}
