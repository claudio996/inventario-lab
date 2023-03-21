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
        Schema::create('personal_dependences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('dependences_id')
            ->nullable()
            ->constrained('dependences')
            ->cascadeOnUpdate()
            ->nullOnDelete();
          

            $table->foreignId('personals_id')
            ->nullable()
            ->constrained('personals')
            ->cascadeOnUpdate()
            ->nullOnDelete();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_dependences');
    }
};
