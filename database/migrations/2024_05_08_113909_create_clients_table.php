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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name_client');
            $table->string('clientprenom');
            $table->string('clientemail');
            //$table->foreign('id_Invoice')->references('id')->on('entreprise')->onDelete('cascade');
            $table->string('clientaddress')->nullable();
            $table->string('clienttel')->nullable();
            $table->string('client_CompteBancaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
