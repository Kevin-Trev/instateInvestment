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
        Schema::create('p_r_o_p_i_e_d_a_d__s_e_r_v_i_c_i_o_s', function (Blueprint $table) {
            $table->id('id_p');
            $table->unsignedbigInteger('id_propiedad');
            $table->foreign('id_propiedad')
            ->references('id_p')
            ->on('p_r_o_p_i_e_d_a_d_e_s');
             $table->unsignedbigInteger('id_servicio');
            $table->foreign('id_servicio')
            ->references('id_serv')
            ->on('s_e_r_v_i_c_i_o_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_r_o_p_i_e_d_a_d__s_e_r_v_i_c_i_o_s');
    }
};
