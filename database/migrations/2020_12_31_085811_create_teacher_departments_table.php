<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_departments', function (Blueprint $table) {
            $table->id();
            $table->string('type_service');//1-lange 2-lesson 3-search master 4-doctoraa
            $table->integer('type_application_submitted');//1=teacher,2=student
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('accepted')->default(0);
            $table->string('rating')->default(0);
            $table->text('text_rating')->nullable();
            $table->string('no_lesson_completed')->default(0);
            $table->string('Re_employment_rate')->default(0);
            $table->string('no_like')->default(0);
            $table->string('language_type');//1-French 2-english
            $table->text('short_cv')->nullable();
            $table->string('vedio_cv')->nullable();
            $table->string('specialization_research')->nullable();
            $table->string('Research_Title')->nullable();
            $table->string('Master_City')->nullable();
            $table->string('notified_befor')->nullable();//1-24 ا2-hour
            $table->string('level')->nullable();//1-univer 2-high 3-middle 4-initial
//            $table->string('Skill_required')->nullable();//conversation 2-write 3-listen
            $table->unsignedBigInteger('user_id');
            $table->string('lesson_type')->nullable();
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->string('lesson_master_type')->nullable();
            $table->unsignedBigInteger('lesson_master_id')->nullable();
            $table->string('field_Ph_type')->nullable();
            $table->unsignedBigInteger('field_ph_id')->nullable() ;
            $table->foreign('field_ph_id')->references('id')->on('field_phs');
            $table->string('price_per_hour')->nullable();
            $table->string('Service_type')->nullable();
            $table->unsignedBigInteger('field_srvice_id')->nullable() ;
            $table->foreign('field_srvice_id')->references('id')->on('field_phs');

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
        Schema::dropIfExists('teacher_departments');
    }
}
