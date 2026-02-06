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
        Schema::create('scm001_rel', function (Blueprint $table) {
            $table->comment('Relación de como se fueron absorviendo los organigramas anteriores');
            $table->string('c01r_depresu', 15)->primary()->comment('Dependencia vigente');
            $table->string('c01r_historia')->nullable()->comment('historia de absorción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001_rel');
    }
};
