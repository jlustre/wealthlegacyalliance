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
        Schema::create('mlm_companies', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('ceo_name')->nullable();
          $table->string('main_office_location')->nullable();
          $table->text('description')->nullable();
          $table->string('logo')->nullable();
          $table->string('website_link')->nullable();
          $table->string('backoffice_link')->nullable();
          $table->boolean('active')->default(true);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mlm_companies');
    }
};
