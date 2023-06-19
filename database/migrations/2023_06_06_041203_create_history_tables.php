<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_history', function (Blueprint $table) {
            $table->id();
            // Agrega las columnas necesarias para el historial de datos
            $table->unsignedBigInteger('user_id');
            $table->string('data');
            $table->timestamps();
        });

        Schema::create('alert_history', function (Blueprint $table) {
            $table->id();
            // Agrega las columnas necesarias para el historial de alertas
            $table->unsignedBigInteger('user_id');
            $table->string('alert_message');
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
        Schema::dropIfExists('data_history');
        Schema::dropIfExists('alert_history');
    }
};
