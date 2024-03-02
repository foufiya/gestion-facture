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
        // disabling check foreign key constraint before creating table
        Schema::disableForeignKeyConstraints();
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->timestamps();
        });
        // enabling check foreign key constraint after creating table
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
