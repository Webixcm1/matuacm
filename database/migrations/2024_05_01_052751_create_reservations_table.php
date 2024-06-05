<?php

use App\Enums\ReservationStatus;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('passager_id')->constrained('passagers')->cascadeOnDelete();
            $table->foreignUuid('trajet_id')->constrained('trajets')->cascadeOnDelete();
            $table->dateTime('dateH_reservation')->nullable();
            $table->enum('status', ReservationStatus::allCaseInStr())->default('en attente')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
