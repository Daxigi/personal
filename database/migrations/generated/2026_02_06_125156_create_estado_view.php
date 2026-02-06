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
        DB::statement("CREATE VIEW \"estado\" AS SELECT DISTINCT ON (legajo) legajo,
    fenov,
    tipo_nov,
    causa_egreso
   FROM (( SELECT DISTINCT ON (tbn00.legajo) tbn00.corr,
            tbn00.legajo,
            tbn00.fenov,
            'tbn00'::text AS tipo_nov,
            NULL::character varying AS causa_egreso
           FROM tbn00
          ORDER BY tbn00.legajo, tbn00.fenov DESC)
        UNION
        ( SELECT DISTINCT ON (tbn09.legajo) tbn09.corr,
            tbn09.legajo,
            tbn09.fenov,
            'tbn09'::text AS tipo_nov,
            per063.p63descr AS causa_egreso
           FROM (tbn09
             LEFT JOIN per063 ON ((tbn09.tipo_egr = per063.p63tipo_egr)))
          WHERE (tbn09.fenov <= ('now'::text)::date)
          ORDER BY tbn09.legajo, tbn09.fenov DESC)) a
  ORDER BY legajo, fenov DESC, corr DESC;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"estado\"");
    }
};
