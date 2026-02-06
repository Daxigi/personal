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
        Schema::create('as_compensatorios', function (Blueprint $table) {
            $table->bigIncrements('id_compensatorio');
            $table->bigInteger('legajo');
            $table->date('fe_desde');
            $table->date('fe_hasta');
            $table->string('autorizante', 150);
            $table->boolean('incluir_feriados')->nullable()->default(false);
            $table->decimal('horas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_compensatorios');
    }
};
