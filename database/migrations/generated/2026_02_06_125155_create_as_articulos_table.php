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
        Schema::create('as_articulos', function (Blueprint $table) {
            $table->comment('Artículos e incisos de las ordenanzas regulatorias');
            $table->string('art_id', 21)->primary()->comment('Identificador del artículo. Conformado por la concatenación de ord_id.\'-\'.art_nro.\'-\'.art_inc');
            $table->string('ord_id', 15)->comment('Ordenanza padre');
            $table->smallInteger('art_nro')->comment('Artículo');
            $table->string('art_inc', 10)->nullable()->comment('Inciso y sub-incisos');
            $table->text('art_descr');
            $table->string('art_areas', 100)->nullable()->comment('Areas que utilizan el artículo separadas por comas (ej: \'AM,AS,RM\' Auditoría Médica, Asistencia, Remuneraciones)');
            $table->string('art_tipo_cert', 15)->nullable();
            $table->smallInteger('art_pres')->nullable()->default(0)->comment('0 NO descuenta presentismo
1 SI descuenta presentismo');
            $table->smallInteger('id_estado')->nullable()->default(1);
            $table->text('cod')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_articulos');
    }
};
