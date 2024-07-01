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
        Schema::create('s_u_s_c_r_i_p_c_i_o_n_e_s__v_i_p_s', function (Blueprint $table) {
            $table->id('id_s');
            $table->double('costo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedbigInteger('id_usuario');
            $table->foreign('id_usuario')
            ->references('id_u')
            ->on('u_s_u_a_r_i_o_s');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_u_s_c_r_i_p_c_i_o_n_e_s__v_i_p_s');
    }
};
