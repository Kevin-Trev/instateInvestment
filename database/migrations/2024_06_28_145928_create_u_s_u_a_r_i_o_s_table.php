<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('u_s_u_a_r_i_o_s', function (Blueprint $table) {
           $table->id('id_u');
           $table->string('ombre', 80);
            $table->string('apellido', 80);
            $table->string('correo', 50);
            $table->integer('telefono');
            $table->string('tipo', 45);
            $table->float('calificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_s_u_a_r_i_o_s');
    }
};
