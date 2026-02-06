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
        DB::statement("CREATE VIEW \"tbn02\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    p09fenov AS fenov,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t02fpv::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_vigencia,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS agrup,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS nivel
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN02'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn02\"");
    }
};
