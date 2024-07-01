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
        Schema::create('c_o_m_e_n_t_a_r_i_o_s', function (Blueprint $table) {
            $table->id('id_com');
            $table->text('comentario');
            $table->date('fecha');
            $table->unsignedbigInteger('id_usuario');
            $table->foreign('id_usuario')
            ->references('id_u')
            ->on('u_s_u_a_r_i_o_s');
            $table->unsignedbigInteger('id_propiedad');
            $table->foreign('id_propiedad')
            ->references('id_p')
            ->on('p_r_o_p_i_e_d_a_d_e_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_o_m_e_n_t_a_r_i_o_s');
    }
};
