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
        Schema::create('trajets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('conducteur_id')->constrained('conducteurs')->cascadeOnDelete();
            $table->dateTime('dateH_depart')->nullable();
            $table->string('point_depart')->nullable();
            $table->string('nombre_place')->nullable();
            $table->string('prix')->nullable();
            $table->boolean('status')->default(0); // 0 for open and 1 for close
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
