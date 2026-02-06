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
        Schema::create('neik05_certificacion', function (Blueprint $table) {
            $table->comment('Certificación y  Asistencia
');
            $table->integer('nk5legajo');
            $table->smallInteger('nk5anio');
            $table->smallInteger('nk5mes');
            $table->smallInteger('nk5dias_trabajados')->nullable();
            $table->string('nk5dep_cert', 15)->nullable();
            $table->integer('nk5documento')->nullable();

            $table->primary(['nk5legajo', 'nk5anio', 'nk5mes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik05_certificacion');
    }
};
