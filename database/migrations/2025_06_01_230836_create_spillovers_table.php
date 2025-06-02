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
        Schema::create('spillovers', function (Blueprint $table) {
          $table->id();
          $table->foreignId('mlm_company_id')->constrained();
          $table->foreignId('user_id'); // sponsor who missed out
          $table->foreignId('downline_id');
          $table->foreignId('reassigned_to')->nullable(); // once found
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spillovers');
    }
};
