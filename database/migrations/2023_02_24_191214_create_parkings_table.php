<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('cnpj')->unique();
            $table->string('cep');
            $table->string('city');
            $table->string('address');
            $table->string('uf');
            $table->string('number');
            $table->integer('complement');
            $table->integer('total_vacancies');
            $table->integer('vacancies_released')->nullable();
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
        Schema::dropIfExists('parkings');
    }
}
