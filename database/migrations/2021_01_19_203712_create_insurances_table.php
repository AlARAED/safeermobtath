<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
            $table->string('no_family')->nullable();;
            $table->string('type');//1-التأمين 2-السكن 3-التأشيرة 4-الاستقبال في المطار 5-خطوات فتح حساب بنكي
            $table->string('your_country')->nullable();
            $table->string('to_country')->nullable();
            $table->string('what_required')->nullable();//1-سكن معهد 2-عائلة 3-فندق
            $table->string('tecket_image')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('insurances');
    }
}
