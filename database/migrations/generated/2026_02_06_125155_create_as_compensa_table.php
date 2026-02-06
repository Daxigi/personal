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
        Schema::create('as_compensa', function (Blueprint $table) {
            $table->decimal('documento', 8, 0)->primary()->comment('Nro. de Documento del ususrio');
            $table->string('descrip', 150)->nullable()->comment('Comentarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_compensa');
    }
};
