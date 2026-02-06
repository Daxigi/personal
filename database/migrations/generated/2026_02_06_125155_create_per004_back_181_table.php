<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('per004_back_181', function (Blueprint $table) {
            $table->integer('p04legajo');
            $table->integer('p04docum');
            $table->smallInteger('p04relacion');
            $table->string('p04apyn_rel', 150);
            $table->date('p04fenac');
            $table->date('p04fpv');
            $table->char('p04estado', 1)->nullable()->default('A');
            $table->boolean('p04discapacitado')->nullable();
            $table->boolean('p04osocial')->nullable();
            $table->boolean('p04salario')->nullable();
            $table->string('p04usualta', 20)->nullable();
            $table->timestamp('p04fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p04usumod', 20)->nullable();
            $table->timestamp('p04femod')->nullable()->default(DB::raw("now()"));
            $table->string('p04domicilio', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per004_back_181');
    }
};
