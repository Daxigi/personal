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
        Schema::table('am_certificados', function (Blueprint $table) {
            $table->foreign(['sit_revista'], 'am_certificados_ka1')->references(['p59sit_rev'])->on('per059')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['art_id'], 'am_certificados_ka2')->references(['art_id'])->on('as_articulos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['gch_asociado_tipo'], 'am_certificados_ka3')->references(['gch_id'])->on('as_grupo_carga_horaria')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('am_certificados', function (Blueprint $table) {
            $table->dropForeign('am_certificados_ka1');
            $table->dropForeign('am_certificados_ka2');
            $table->dropForeign('am_certificados_ka3');
        });
    }
};
