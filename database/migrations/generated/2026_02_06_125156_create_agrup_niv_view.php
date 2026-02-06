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
        DB::statement("CREATE VIEW \"agrup_niv\" AS SELECT DISTINCT ON (legajo) legajo,
    corr,
    fenov,
    fecha_vigencia,
    agrup,
    nivel,
    agrup_l,
    nivel_l
   FROM ( SELECT per009.p09legajo AS legajo,
            per009.p09corr AS corr,
            per009.p09fenov AS fenov,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02fpv::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_vigencia,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS agrup,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS nivel,
            ( SELECT per055.agrup_l
                   FROM per055
                  WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) AS agrup_l,
                CASE
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 1) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'A'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 2) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'B'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 3) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'C'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 4) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'D'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 5) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'E'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 6) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'F'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 7) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'G'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 8) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'H'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 9) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'I'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 10) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t02agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'J'::text
                    ELSE ' '::text
                END AS nivel_l
           FROM per009
          WHERE ((per009.p09tipo_nov)::text = 'TBN02'::text)
        UNION
         SELECT per009.p09legajo AS legajo,
            per009.p09corr AS corr,
            per009.p09fenov AS fenov,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00fpv::[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})'::text), '([0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2})$'::text))::date AS fecha_vigencia,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS agrup,
            (\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer AS nivel,
            ( SELECT per055.agrup_l
                   FROM per055
                  WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) AS agrup_l,
                CASE
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 1) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'A'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 2) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'B'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 3) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'C'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 4) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'D'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 5) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'E'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 6) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'F'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 7) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'G'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 8) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'H'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 9) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'I'::text
                    WHEN (((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00nivel::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = 10) AND (( SELECT per055.agrup_l
                       FROM per055
                      WHERE ((\"substring\"(\"substring\"((per009.p09resto_reg)::text, '(t00agrup::[0-9]{1,4})'::text), '([0-9]{1,4})$'::text))::integer = per055.p55agrup)) IS NOT NULL)) THEN 'J'::text
                    ELSE ' '::text
                END AS nivel_l
           FROM per009
          WHERE ((per009.p09tipo_nov)::text = 'TBN00'::text)
  ORDER BY 1, 3 DESC) u
  ORDER BY legajo, fenov DESC;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"agrup_niv\"");
    }
};
