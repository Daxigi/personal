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
        Schema::table('ifcam_alumnos', function (Blueprint $table) {
            $table->foreign(['id_curso'], 'almunos_fk')->references(['id_curso'])->on('ifcam_cursos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ifcam_alumnos', function (Blueprint $table) {
            $table->dropForeign('almunos_fk');
        });
    }
};
