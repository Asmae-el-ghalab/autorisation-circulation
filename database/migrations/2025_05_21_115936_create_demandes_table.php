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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('cin');
            $table->string('matricule');
            $table->string('email');
            $table->text('adresse');
            // Informations véhicule
            $table->string('type_vehicule');
            $table->string('numero_immatriculation');
            $table->integer('capacite');
            $table->integer('annee_fabrication');
            $table->string('couleur');
            // Informations trajet
            $table->string('point_depart');
            $table->string('point_arrivee');
            $table->string('jours_travail');
            $table->integer('distance_km');
            // Documents
            $table->string('type_licence');
            $table->string('registre_commerce')->nullable();
            $table->string('identifiant_fiscal')->nullable();
            $table->string('carte_grise_image')->nullable();
            $table->string('assurance_image')->nullable();
            $table->string('permis_conduire_image')->nullable();
            $table->string('cin_image')->nullable();
            $table->enum('status', ['en_attente', 'accepte', 'refuse'])->default('en_attente');
            $table->text('notes_admin')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
