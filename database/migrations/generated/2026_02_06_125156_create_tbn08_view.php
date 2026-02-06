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
        DB::statement("CREATE VIEW \"tbn08\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    \"substring\"(\"substring\"((p09resto_reg)::text, '(t08emisor_orden::[A-z,á,é,í,ó,ú,\" \",-]{1,100})'::text), '([A-z,á,é,í,ó,ú,\" \",-]{1,100})$'::text) AS emisor_orden,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t08tipo_sanc::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::smallint AS tipo_sanc,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t08fe_desde::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fe_desde,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t08fe_hasta::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fe_hasta
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN08'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn08\"");
    }
};
