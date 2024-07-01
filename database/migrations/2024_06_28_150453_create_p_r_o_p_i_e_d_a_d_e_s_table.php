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
        Schema::create('p_r_o_p_i_e_d_a_d_e_s', function (Blueprint $table) {
            $table->id('id_p');
            $table->float('precio');
            $table->string('recamaras');
            $table->string('disponibilidad');
            $table->string('direccion');
            $table->string('area');
            $table->string('frente');
            $table->string('fondo');
            $table->string('rentable');
            $table->string('vendible');
            $table->unsignedbigInteger('id_usuario');
            $table->foreign('id_usuario')
            ->references('id_u')
            ->on('u_s_u_a_r_i_o_s');
            $table->unsignedbigInteger('id_tipo_propiedad');
            $table->foreign('id_tipo_propiedad')
            ->references('id_t')
            ->on('t_i_p_o__p_r_o_p_i_e_d_a_d_s');
            $table->unsignedbigInteger('id_verificacion');
            $table->foreign('id_verificacion')
            ->references('id_v')
            ->on('v_e_r_i_f_i_c_a_c_i_o_n_s');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_r_o_p_i_e_d_a_d_e_s');
    }
};
