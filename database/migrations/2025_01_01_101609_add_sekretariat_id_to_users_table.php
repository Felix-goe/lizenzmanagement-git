<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the sekretariat_id column
            $table->string('sekretariat_id')->nullable()->after('status');
            
            // Add the foreign key constraint
            $table->foreign('sekretariat_id')
                  ->references('SekretariatID')
                  ->on('sekretariat')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'sekretariat_id')) {
                $table->dropForeign(['sekretariat_id']); // Fremdschlüssel entfernen
                $table->dropColumn('sekretariat_id');   // Spalte entfernen
            }
        });
    }

};
