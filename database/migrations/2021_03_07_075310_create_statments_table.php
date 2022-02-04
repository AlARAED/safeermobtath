<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id') ;
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('ads_id')->nullable();
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->float('price_total');
            $table->integer('type_statment');//1-معلم لغة 2-معلم دروس 3-ماستر 4-دكتوراة 5-خدمات منوعة 6-اعلان عادى 7-اعلان مميز
            $table->integer('price_per_hour')->nullable();
            $table->integer('price_per_month')->nullable();
            $table->integer('price_per_year')->nullable();
            $table->integer('price_per_day')->nullable();






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
        Schema::dropIfExists('statments');
    }
}
