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
        DB::statement("CREATE VIEW \"tbn09\" AS SELECT p09legajo AS legajo,
    p09fenov AS fenov,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t09tipo_egr::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::smallint AS tipo_egr
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN09'::text)
  ORDER BY p09legajo, p09fenov DESC;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn09\"");
    }
};
