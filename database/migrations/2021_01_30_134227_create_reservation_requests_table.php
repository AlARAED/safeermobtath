<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_department_id');
            $table->unsignedBigInteger('student_id') ;
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedBigInteger('teacher_id') ;
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->integer('state')->default(0);
            $table->integer('no_hour')->nullable();
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
        Schema::dropIfExists('reservation_requests');
    }
}
