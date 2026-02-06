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
        DB::statement("CREATE VIEW \"tbn00\" AS SELECT p09legajo AS legajo,
    p09fenov AS fenov,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t00sit_rev::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS sit_rev,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t00fpv::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_vigencia,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS agrup,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS nivel,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t00depresu::[0-9]{1,20})'::text), '([0-9]{1,20})$'::text))::bigint AS depresu
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN00'::text)
  ORDER BY p09legajo, p09fenov DESC;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn00\"");
    }
};
