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
        DB::statement("CREATE VIEW \"tbn04\" AS SELECT p09legajo AS legajo,
    p09corr AS corr,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t04tipo_lic::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS tipo_lic,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t04anio::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS anio_lic,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t04corr_sol::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS corr_sol,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t04fe_ult_dia::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fe_ult_dia,
    (\"substring\"(\"substring\"((p09resto_reg)::text, '(t04dias_restan::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS dias_restan
   FROM per009
  WHERE ((p09tipo_nov)::text = 'TBN04'::text)
  ORDER BY p09legajo, p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn04\"");
    }
};
