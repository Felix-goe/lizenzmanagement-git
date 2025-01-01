<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPcidToLizenzTable extends Migration
{
    public function up()
    {
        // Prüfen, ob die Spalte 'PCID' nicht existiert
        if (!Schema::hasColumn('lizenz', 'PCID')) {
            Schema::table('lizenz', function (Blueprint $table) {
                $table->string('PCID')->after('Lizenzstatus'); // Fremdschlüssel hinzufügen
                $table->foreign('PCID')->references('PCID')->on('computer')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::table('lizenz', function (Blueprint $table) {
            if (Schema::hasColumn('lizenz', 'PCID')) {
                $table->dropForeign(['PCID']);
                $table->dropColumn('PCID');
            }
        });
    }
}
