<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stateprovs', function (Blueprint $table) {
            $table->id()->increments(true);
            $table->string('name')->unique();
            $table->string('abbreviation')->unique();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });

        // Add all the states and provinces to the table
        $stateProvs = [
            ['name' => 'Alberta', 'abbreviation' => 'AB', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'British Columbia', 'abbreviation' => 'BC', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Manitoba', 'abbreviation' => 'MB', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'New Brunswick', 'abbreviation' => 'NB', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Newfoundland and Labrador', 'abbreviation' => 'NL', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Northwest Territories', 'abbreviation' => 'NT', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Nova Scotia', 'abbreviation' => 'NS', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Nunavut', 'abbreviation' => 'NU', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Ontario', 'abbreviation' => 'ON', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Prince Edward Island', 'abbreviation' => 'PE', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Quebec', 'abbreviation' => 'QC', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Saskatchewan', 'abbreviation' => 'SK', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Yukon', 'abbreviation' => 'YT', 'country_id' => 37, 'is_active' => 1],
            ['name' => 'Alabama', 'abbreviation' => 'AL', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Alaska', 'abbreviation' => 'AK', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Arizona', 'abbreviation' => 'AZ', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Arkansas', 'abbreviation' => 'AR', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'California', 'abbreviation' => 'CA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Colorado', 'abbreviation' => 'CO', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Connecticut', 'abbreviation' => 'CT', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Delaware', 'abbreviation' => 'DE', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Florida', 'abbreviation' => 'FL', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Georgia', 'abbreviation' => 'GA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Hawaii', 'abbreviation' => 'HI', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Idaho', 'abbreviation' => 'ID', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Illinois', 'abbreviation' => 'IL', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Indiana', 'abbreviation' => 'IN', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Iowa', 'abbreviation' => 'IA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Kansas', 'abbreviation' => 'KS', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Kentucky', 'abbreviation' => 'KY', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Louisiana', 'abbreviation' => 'LA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Maine', 'abbreviation' => 'ME', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Maryland', 'abbreviation' => 'MD', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Massachusetts', 'abbreviation' => 'MA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Michigan', 'abbreviation' => 'MI', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Minnesota', 'abbreviation' => 'MN', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Mississippi', 'abbreviation' => 'MS', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Missouri', 'abbreviation' => 'MO', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Montana', 'abbreviation' => 'MT', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Nebraska', 'abbreviation' => 'NE', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Nevada', 'abbreviation' => 'NV', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'New Hampshire', 'abbreviation' => 'NH', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'New Jersey', 'abbreviation' => 'NJ', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'New Mexico', 'abbreviation' => 'NM', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'New York', 'abbreviation' => 'NY', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'North Carolina', 'abbreviation' => 'NC', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'North Dakota', 'abbreviation' => 'ND', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Ohio', 'abbreviation' => 'OH', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Oklahoma', 'abbreviation' => 'OK', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Oregon', 'abbreviation' => 'OR', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Pennsylvania', 'abbreviation' => 'PA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Rhode Island', 'abbreviation' => 'RI', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'South Carolina', 'abbreviation' => 'SC', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'South Dakota', 'abbreviation' => 'SD', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Tennessee', 'abbreviation' => 'TN', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Texas', 'abbreviation' => 'TX', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Utah', 'abbreviation' => 'UT', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Vermont', 'abbreviation' => 'VT', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Virginia', 'abbreviation' => 'VA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Washington', 'abbreviation' => 'WA', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'West Virginia', 'abbreviation' => 'WV', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Wisconsin', 'abbreviation' => 'WI', 'country_id' => 224, 'is_active' => 1],
            ['name' => 'Wyoming', 'abbreviation' => 'WY', 'country_id' => 224, 'is_active' => 1]
        ];

        // Add all the states and provinces to the table
        DB::table('stateprovs')->insert($stateProvs);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stateprovs');
    }


};
