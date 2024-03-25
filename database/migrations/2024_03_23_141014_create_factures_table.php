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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->decimal('amount', 10, 2); // Assuming 10 digits with 2 decimal places for monetary values
            $table->decimal('vat', 5, 2); // Assuming VAT with 5 digits including 2 decimal places
            $table->string('description')->nullable();
            $table->string('invoice_number')->unique();
            $table->timestamps();
        });

        // Generate invoice number based on the date of the invoice
        Schema::table('factures', function (Blueprint $table) {
            $table->index('date');
            $table->index('invoice_number');
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
