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
        Schema::create('referrals', function (Blueprint $table) {
          $table->id();
          $table->foreignId('sponsor_id')->constrained('users')->onDelete('cascade');
          $table->foreignId('referred_user_id')->constrained('users')->onDelete('cascade');
          $table->unique(['sponsor_id', 'referred_user_id']);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};
