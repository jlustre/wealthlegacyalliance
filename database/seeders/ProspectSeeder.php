<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
          DB::table('prospects')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'user_id' => $faker->numberBetween(1, 2),
            'country_id' => $faker->randomElement([37, 134, 224]),
            'stateprov_id' => $faker->numberBetween(1, 63),
            'timezone_id' => $faker->numberBetween(1, 4),
            'source' => $faker->randomElement(['family', 'friends', 'work', 'church', 'others']),
            'priority' => $faker->randomElement(['high', 'medium', 'low']),
            'status' => $faker->randomElement(['new', '1stcontact', '2ndcontact', '3rdcontact', 'followup', 'uninterested', 'joined']),
            'notes' => $faker->text(100),
            'assigned_to' => $faker->randomElement([1, 2]),
            'phone' => $faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
          ]);
        }
    }
}
