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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('sponsor_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('country_id')->references('id')->on('countries')->nullOnDelete();
            $table->foreign('stateprov_id')->references('id')->on('stateprovs')->nullOnDelete();
            $table->foreign('timezone_id')->references('id')->on('timezones')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['sponsor_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['stateprov_id']);
            $table->dropForeign(['timezone_id']);
        });
    }
};
