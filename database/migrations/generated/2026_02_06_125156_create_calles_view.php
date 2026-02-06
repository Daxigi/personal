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
        DB::statement("CREATE VIEW \"calles\" AS SELECT DISTINCT ON (codca) codca,
    nomca
   FROM (( SELECT DISTINCT ON (scm004.nomca) scm004.codca,
            scm004.nomca
           FROM scm004
          ORDER BY scm004.nomca)
        UNION
        ( SELECT DISTINCT ON (scm004_aux.nomca) scm004_aux.codca,
            scm004_aux.nomca
           FROM scm004_aux
          ORDER BY scm004_aux.nomca)) x;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"calles\"");
    }
};
