<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');

            $table->unsignedBigInteger('city_id');

            $table->unsignedBigInteger('university_id');

            $table->string('field');
            $table->string('specialty');
            $table->unsignedBigInteger('degree_id');

            $table->string('email');
            $table->string('passport_img');
            $table->string('degree_statment_img')->nullable();
            $table->string('high_school_certificate')->nullable();
            $table->string('recomendation_img')->nullable();
            $table->string('Certificate_good_conduct')->nullable();
            $table->string('cv')->nullable();
            $table->string('Diploma_certificate')->nullable();
            $table->string('speach')->nullable();
            $table->string('good_study')->nullable();
            $table->string('Explanation_description_materials')->nullable();
            $table->string('Certificate_translation')->nullable();
            $table->string('American_System_Certificates')->nullable();
            $table->string('is_grant');
            $table->string('Financial_guarantee_certificate')->nullable();
            $table->string('is_accept')->default(0);
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
        Schema::dropIfExists('applications');
    }
}
