<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->date('date');
            $table->decimal('montant', 10, 2); // Assuming 10 digits with 2 decimal places for monetary values
            $table->string('etat');
            $table->date('date_paiement')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        
        // Generate date from the date of depense
        Schema::table('depenses', function (Blueprint $table) {
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depenses');
    }
};