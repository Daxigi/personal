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
        Schema::create('sue044', function (Blueprint $table) {
            $table->comment('Impuesto a als Ganancias: Tabla de deducciones declaradas (F.572)');
            $table->integer('s44documento');
            $table->integer('s44correl');
            $table->integer('s44rubro')->nullable();
            $table->string('s44denominacion', 100)->nullable();
            $table->decimal('s44importe', 9)->nullable();
            $table->date('s44fedesde')->nullable();
            $table->date('s44fehasta')->nullable();

            $table->primary(['s44documento', 's44correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue044');
    }
};
