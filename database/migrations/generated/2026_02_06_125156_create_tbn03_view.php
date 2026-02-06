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
        DB::statement("CREATE VIEW \"tbn03\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03tipo_lic::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS tipo_lic,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03anio::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS anio_lic,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03fe_desde::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_desde,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03fe_hasta::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_hasta,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03dias_disponibles::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS dias_disponibles,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t03dias_pedidos::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS dias_pedidos
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN03'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn03\"");
    }
};
