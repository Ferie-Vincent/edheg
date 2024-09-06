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
        Schema::table('events', function (Blueprint $table) {
            $table->string('formateur')->nullable(); // Nouveau champ Formateur
            $table->string('emploi')->nullable(); // Nouveau champ Emploi
            $table->string('societe_actuelle')->nullable(); // Nouveau champ Société actuelle
            $table->string('linked')->nullable(); // Nouveau champ Linked (facultatif)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['formateur', 'emploi', 'societe_actuelle', 'linked']);
        });
    }
};
