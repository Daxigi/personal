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
        Schema::create('sue046', function (Blueprint $table) {
            $table->comment('Impuesto a las Ganancias: Tabla de haberes de otras entidades (F.572)');
            $table->integer('s46documento');
            $table->integer('s46correl');
            $table->string('s46denominacion', 100)->nullable();
            $table->decimal('s46importe', 9)->nullable();
            $table->date('s46fedesde')->nullable();
            $table->date('s46fehasta')->nullable();

            $table->primary(['s46documento', 's46correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue046');
    }
};
