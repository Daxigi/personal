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
        Schema::table('as_ordenanzas', function (Blueprint $table) {
            $table->foreign(['cod_area'], 'as_ordenanzas_fk1')->references(['cod_area'])->on('as_normas_areas_uso')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_ordenanzas', function (Blueprint $table) {
            $table->dropForeign('as_ordenanzas_fk1');
        });
    }
};
