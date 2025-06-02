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
        Schema::create('prospects', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->string('email')->nullable();
          $table->string('phone')->nullable();
          $table->unsignedBigInteger('country_id')->nullable()->index();
          $table->unsignedBigInteger('stateprov_id')->nullable()->index();
          $table->unsignedBigInteger('timezone_id')->nullable()->index();
          $table->enum('priority', ['high', 'medium', 'low'])->nullable();
          $table->enum('source', ['family', 'friends', 'work', 'church', 'others'])->nullable();
          $table->enum('status', ['new', '1stcontact', '2ndcontact', '3rdcontact', 'followup', 'uninterested', 'joined'])->default('new');
          $table->string('assigned_to')->nullable();
          $table->text('notes')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospects');
    }
};
