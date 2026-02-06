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
        Schema::table('per007', function (Blueprint $table) {
            $table->foreign(['p07fpv'], 'per007_ca1')->references(['p57fpv'])->on('per057')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p07agrup'], 'per007_ca2')->references(['p55agrup'])->on('per055')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p07adicional'], 'per007_ca3')->references(['p56adicional'])->on('per056')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p07fpv', 'p07agrup', 'p07nivel'], 'per007_ca4')->references(['p06fpv', 'p06agrup', 'p06nivel'])->on('per006')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per007', function (Blueprint $table) {
            $table->dropForeign('per007_ca1');
            $table->dropForeign('per007_ca2');
            $table->dropForeign('per007_ca3');
            $table->dropForeign('per007_ca4');
        });
    }
};
