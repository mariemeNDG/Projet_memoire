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
        Schema::create('incubateur_candidatures', function (Blueprint $table) {
            $table->id();
            // Relations
            $table->foreignId('incubateur_id')->constrained()->onDelete('cascade');
            $table->foreignId('projet_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // L'entrepreneur qui postule

            // Informations sur la candidature
            $table->text('motivation');
            $table->string('business_plan')->nullable(); // Fichier PDF

            // Informations complémentaires
            $table->integer('equipe')->default(1); // Membres de l'équipe
            $table->decimal('budget_previsionnel', 12, 2)->nullable();
            $table->string('duree_incubation')->nullable(); // Durée souhaitée
            $table->json('besoins_specifiques')->nullable(); // Besoins particuliers
            $table->timestamps();

            // Statut et suivi
            $table->enum('statut', [
                'en_attente',
                'en_revue',
                'entretien',
                'accepte',
                'refuse',
                'liste_attente'
            ])->default('en_attente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incubateur_candidatures');
    }
};
