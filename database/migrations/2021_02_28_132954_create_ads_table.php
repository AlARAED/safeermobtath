<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('type_membership');

            $table->unsignedBigInteger('user_id') ;
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('featured')->default(0);
            $table->string('owner');

            $table->unsignedBigInteger('country_mobtath_id');

            $table->unsignedBigInteger('city_mobtath_id');

            $table->text('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('website_url')->nullable();


            $table->unsignedBigInteger('section_id') ;
            $table->foreign('section_id')->references('id')->on('sections');
            $table->text('details');
            $table->text('featured');
            $table->string('image');
            $table->string('vedio');
            $table->date('start_date');
            $table->integer('repeated');

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
        Schema::dropIfExists('ads');
    }
}
