<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('okupaciones', function (Blueprint $table) {
            $table->id();
            $table->string('calle');
            $table->string('cp');
            $table->string('numero');
            $table->unsignedBigInteger('id_user');
            $table->string('localidad');
            $table->float('latitud', 18, 15); // 18 dígitos en total, 15 decimales
            $table->float('longitud', 18, 15);
            $table->timestamps();
            // 
            $table->foreign('id_user')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('okupaciones');
    }
};
