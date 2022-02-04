<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collages', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->unsignedBigInteger('country_id');

            $table->unsignedBigInteger('city_id');

            $table->text('content_ar');
            $table->text('content_en');
            $table->text('descreption_ar');
            $table->text('descreption_en');
            $table->text('address_ar');
            $table->text('address_en');
            $table->text('fields_ar');
            $table->text('fields_en');
            $table->text('more_info_ar');
            $table->text('more_info_en');

            $table->string('image');

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
        Schema::dropIfExists('collages');
    }
}
