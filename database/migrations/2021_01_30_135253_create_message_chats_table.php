<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id') ;
            $table->foreign('sender_id')->references('id')->on('users');
            $table->unsignedBigInteger('reciver_id') ;
            $table->foreign('reciver_id')->references('id')->on('users');
            $table->unsignedBigInteger('reservation_id') ;
            $table->foreign('reservation_id')->references('id')->on('reservation_requests');
            $table->text('content');
            $table->text('file_url');
            $table->text('sound_url');
            $table->softDeletes();




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
        Schema::dropIfExists('message_chats');
    }
}
