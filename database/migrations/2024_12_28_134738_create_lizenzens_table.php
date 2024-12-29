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
        Schema::create('lizenzens', function (Blueprint $table) {
            $table->id();
            $table->string('lizenz_id');
            $table->string('lizenbeginn');
            $table->string('lizenende');
            $table->string('software');
            $table->string('kundennummer');
            $table->string('kontakt_hersteller');
            $table->string('status');
            $table->string('rechnung');
            $table->string('lizenschlüssel');
            $table->string('beschreibung');
            $table->string('kaufender_mitarbeiter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lizenzens');
    }
};
