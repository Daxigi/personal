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
        DB::statement("CREATE VIEW \"dep_herencias\" AS SELECT res_uno.c01depresu,
    res_uno.n_heredera,
    scm001.c01leyen
   FROM (( SELECT v.c01depresu,
                CASE
                    WHEN ((v.heredera IS NULL) AND ((v.c01feinvi)::text = ( SELECT max((scm001_1.c01feinvi)::text) AS max
                       FROM scm001 scm001_1))) THEN v.c01depresu
                    WHEN (v.heredera IS NOT NULL) THEN v.heredera
                    ELSE NULL::character varying
                END AS n_heredera
           FROM ( SELECT scm001_1.c01depresu,
                    scm001_1.c01feinvi,
                    ( SELECT scm001_rel.c01r_depresu
                           FROM scm001_rel
                          WHERE ((scm001_rel.c01r_historia)::text ~~ (('%'::text || (scm001_1.c01depresu)::text) || '%'::text))) AS heredera
                   FROM scm001 scm001_1) v) res_uno
     LEFT JOIN scm001 ON (((res_uno.n_heredera)::text = (scm001.c01depresu)::text)))
  ORDER BY res_uno.c01depresu;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"dep_herencias\"");
    }
};
