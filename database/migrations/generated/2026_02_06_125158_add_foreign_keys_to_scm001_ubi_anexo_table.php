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
        Schema::table('scm001_ubi_anexo', function (Blueprint $table) {
            $table->foreign(['c01depresu'], 'ubi_anexo_fk1')->references(['c01depresu'])->on('scm001')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_tipo_anexo'], 'ubi_anexo_fk2')->references(['id_tipo_anexo'])->on('scm001_ubi_anexo_tipo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scm001_ubi_anexo', function (Blueprint $table) {
            $table->dropForeign('ubi_anexo_fk1');
            $table->dropForeign('ubi_anexo_fk2');
        });
    }
};
