<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lizenz', function (Blueprint $table) {
            $table->string('LizenzID')->primary();
            $table->date('Lizenzbeginn');
            $table->date('Lizenzende');
            $table->string('Software');
            $table->string('Lizenzstatus');
            $table->string('PCID');
            $table->timestamps();

            // Fremdschlüssel hinzufügen
            $table->foreign('PCID')->references('PCID')->on('computer')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        // Überprüfen, ob die Tabelle existiert, bevor Änderungen vorgenommen werden
        if (Schema::hasTable('lizenz')) {
            Schema::table('lizenz', function (Blueprint $table) {
                // Fremdschlüssel nur entfernen, wenn er existiert
                if (Schema::hasColumn('lizenz', 'PCID')) {
                    try {
                        $table->dropForeign(['PCID']); // Fremdschlüssel entfernen
                    } catch (Exception $e) {
                        // Ignorieren, falls der Fremdschlüssel nicht existiert
                        info('Fremdschlüssel "PCID" konnte nicht entfernt werden: ' . $e->getMessage());
                    }
                    $table->dropColumn('PCID'); // Spalte entfernen
                }
            });

            Schema::dropIfExists('lizenz');
        }
    }
};

