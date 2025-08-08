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
        Schema::create('financements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->string('type');
            $table->decimal('montant', 10, 2);
            $table->text('description')->nullable();
            $table->string('statut')->default('en attente'); // Possible values: 'en attente', 'approuvé', 'rejeté'
            $table->string('document')->nullable(); // Chemin vers le justificatif du financement
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financements');
    }
};
