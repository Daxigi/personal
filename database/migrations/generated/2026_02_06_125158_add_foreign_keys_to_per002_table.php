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
        Schema::table('per002', function (Blueprint $table) {
            $table->foreign(['p02legajo'], 'pr002_ca1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['p02codtit'], 'pr002_ca2')->references(['p50codtit'])->on('per050')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p02codorgtit'], 'pr002_ca3')->references(['p51codorgtit'])->on('per051')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per002', function (Blueprint $table) {
            $table->dropForeign('pr002_ca1');
            $table->dropForeign('pr002_ca2');
            $table->dropForeign('pr002_ca3');
        });
    }
};
