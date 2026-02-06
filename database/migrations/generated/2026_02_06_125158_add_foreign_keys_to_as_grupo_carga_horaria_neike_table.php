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
        Schema::table('as_grupo_carga_horaria_neike', function (Blueprint $table) {
            $table->foreign(['tch_id_neike'], 'as_grupo_carga_horaria_ka1')->references(['tch_id'])->on('as_tipo_carga_horaria')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_grupo_carga_horaria_neike', function (Blueprint $table) {
            $table->dropForeign('as_grupo_carga_horaria_ka1');
        });
    }
};
