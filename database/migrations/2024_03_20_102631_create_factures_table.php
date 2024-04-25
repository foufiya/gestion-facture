<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero_facture');
            $table->date('date_facturation');
            $table->string('entreprise_nom');
            $table->string('nom_produit');
            $table->string('entreprise_email')->nullable();
            $table->string('entreprise_adresse')->nullable();
            $table->string('entreprise_tel')->nullable();
            $table->string('client_nom');
            $table->string('client_prenom');
            $table->string('client_email');
            $table->string('client_adresse')->nullable();
            $table->string('client_tel')->nullable();
            $table->string('Etat')->nullable();
            $table->integer('Etat_paiement')->default(0); // 0 = non pay
            $table->decimal('prix', 10, 2); // Ajout de la colonne pour le prix des produits
            $table->decimal('montant_total', 10, 2);
            $table->decimal('tva', 10, 2)->nullable(); // Ajout de la colonne pour le montant de la TV
            $table->date('date_echeance')->nullable();
            $table->timestamps();
        });

      

    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};