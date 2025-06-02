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
        Schema::create('user_mlm_statuses', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->foreignId('mlm_company_id')->constrained('mlm_companies')->onDelete('cascade');
          $table->boolean('joined')->default(false);
          $table->timestamp('joined_at')->nullable();
          $table->foreignId('upline_id')->nullable()->constrained('users')->nullOnDelete();
          $table->unique(['user_id', 'mlm_company_id']);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mlm_statuses');
    }
};
