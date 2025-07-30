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
        Schema::create('mentorats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('mentor_id')->constrained('users')->onDelete('cascade'); // Assigné à un mentor de la table 'users'
            $table->foreignId('projet_id')->constrained()->onDelete('cascade');
            $table->text('domaine_accompagnement')->nullable();
            $table->text('objectif_accompagnement')->nullable();
            $table->string('disponibilites')->nullable();
            $table->string('duree')->nullable();
            $table->enum('statut', ['En attente', 'Accepté', 'Réfusé'])->default('En attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentorats');
    }
};
