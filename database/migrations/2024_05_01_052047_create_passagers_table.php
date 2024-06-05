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
        Schema::create('passagers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();
            $table->date('dateNais')->nullable();
            $table->string('sexe')->nullable();
            $table->string('cni')->nullable();
            $table->string('cni_verso')->nullable();
            $table->string('cni_recto')->nullable();
            $table->string('photos')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->boolean('status')->default(0)->nullable();// 0 for not verify and 1 for verify
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passagers');
    }
};
