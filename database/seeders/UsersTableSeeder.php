<?php

namespace Database\Seeders;

use App\Models\Journey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_US');
        for ($i = 1; $i <= 5; $i++) {
            Journey::create([
                'category_id' => $faker->numberBetween(1,3),
                'Job_Title' => $faker->jobTitle,
                'Job_Location' => $faker->company,
                'Job_Description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'Month' => $faker->month,
                'Year' => $faker->year,
            ]);
        }
    }
}
