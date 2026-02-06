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
        DB::statement("CREATE VIEW \"tbn10\" AS SELECT per009.p09legajo AS legajo,
    per009.p09fenov AS fenov,
    per009.p09corr AS corr,
    (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t10funcion::[0-9]{1,100})'::text), '([0-9]{1,100})$'::text))::integer AS id_funcion,
    per069.p69funcion AS funcion,
    per069.p69letras,
        CASE
            WHEN (per069.p69letras IS NOT NULL) THEN ((((per069.p69letras)::text || ' - '::text) || (per069.p69funcion)::text))::character varying
            ELSE per069.p69funcion
        END AS funcion_new
   FROM (per009
     LEFT JOIN per069 ON ((per069.p69id = (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t10funcion::[0-9]{1,100})'::text), '([0-9]{1,100})$'::text))::integer)))
  WHERE ((per009.p09tipo_nov)::text = 'TBN10'::text)
  ORDER BY per009.p09legajo, per009.p09corr;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"tbn10\"");
    }
};
