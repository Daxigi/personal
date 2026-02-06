<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW \"tbn01\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t01sit_rev::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS sit_rev,
    p09fenov AS fenov
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN01'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn01\"");
    }
};
