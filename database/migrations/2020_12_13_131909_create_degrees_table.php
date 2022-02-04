<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->softDeletes();
            $table->timestamps();
        });

        \App\Models\Degree::create([
            // 'name' => $data['name'],
            'name_ar' => 'الماجستير',
            'name_en' => 'Masters',
        ]);

        \App\Models\Degree::create([
            // 'name' => $data['name'],
            'name_ar' => 'البكالوريوس',
            'name_en' => 'BSC',
        ]);

        \App\Models\Degree::create([
            // 'name' => $data['name'],
            'name_ar' => 'اللغة',
            'name_en' => 'language',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degrees');
    }
}
