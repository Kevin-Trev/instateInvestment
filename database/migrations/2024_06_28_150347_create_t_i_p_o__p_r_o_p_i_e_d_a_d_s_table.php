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
        Schema::create('t_i_p_o__p_r_o_p_i_e_d_a_d_s', function (Blueprint $table) {
            $table->id('id_t');
            $table->string('tipo',70);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_i_p_o__p_r_o_p_i_e_d_a_d_s');
    }
};
