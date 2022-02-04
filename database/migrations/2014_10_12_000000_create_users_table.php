<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('country_mobtath_id');

            $table->unsignedBigInteger('city_mobtath_id');

            $table->string('image')->default('user.png');
            $table->integer('role')->default('2');
            $table->text('aboutus')->unique();
            $table->string('no_website');
            $table->text('emailwebsite');
            $table->text('fb_account');
            $table->text('twitter_account');







            $table->rememberToken();
            $table->timestamps();

        });
        User::create([
            // 'name' => $data['name'],
            'name' => 'safeer',
            'email' => 'alaashawa1995@gmail.com',
            'password' => Hash::make('123456'),
            'country_mobtath_id' => 1,
            'city_mobtath_id' => 1,
            'image' => 'user.png',
            'role' => 1,


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
