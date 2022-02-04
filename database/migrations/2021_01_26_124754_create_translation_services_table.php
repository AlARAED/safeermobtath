<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation_services', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('type_file');//1-legal 2-geometric 3-medical 4-Technical 5-academic 6-generally
            $table->string('Original_language');//1-arabic 2-english
            $table->string('Target_language');
            $table->string('type_service');//translation reformulate review
            $table->text('deatils');
            $table->string('file');


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
        Schema::dropIfExists('translation_services');
    }
}
