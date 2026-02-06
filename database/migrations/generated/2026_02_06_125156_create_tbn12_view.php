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
        DB::statement("CREATE VIEW \"tbn12\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t12p09id_doc::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS id_doc,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t12fe_desde::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_desde,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t12fe_hasta::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_hasta
   FROM per009
  WHERE ((p09tipo_nov)::text = 'tbn12'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn12\"");
    }
};
