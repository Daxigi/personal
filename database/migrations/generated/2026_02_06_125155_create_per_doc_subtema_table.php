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
        Schema::create('per_doc_subtema', function (Blueprint $table) {
            $table->smallInteger('tema_doc');
            $table->increments('subtema_doc');
            $table->string('descripcion', 100)->nullable();

            $table->primary(['tema_doc', 'subtema_doc']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_doc_subtema');
    }
};
