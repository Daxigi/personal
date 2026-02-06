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
        DB::statement("CREATE VIEW \"sit_revista\" AS SELECT p01legajo AS legajo,
    ( SELECT (cs.sit_rev)::integer AS sit_rev
           FROM ( SELECT per009.p09legajo,
                    per009.p09fenov,
                    \"substring\"(\"substring\"((per009.p09resto_reg)::text, '(sit_rev::[0-9]{1,16})'::text), '([0-9]{1,16})$'::text) AS sit_rev
                   FROM per009
                  WHERE ((per009.p09legajo = per001.p01legajo) AND ((per009.p09tipo_nov)::text = ANY (ARRAY[('TBN00'::character varying)::text, ('TBN01'::character varying)::text])))) cs
          WHERE ((cs.p09legajo = per001.p01legajo) AND (cs.p09fenov = ( SELECT max(per009.p09fenov) AS max
                   FROM per009
                  WHERE ((per009.p09legajo = per001.p01legajo) AND ((per009.p09tipo_nov)::text = ANY (ARRAY[('TBN00'::character varying)::text, ('TBN01'::character varying)::text]))))))) AS sit_rev
   FROM per001;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"sit_revista\"");
    }
};
