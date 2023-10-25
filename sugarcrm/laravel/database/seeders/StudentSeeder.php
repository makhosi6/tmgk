<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('lt_student')->insert([
            ['name' => $faker->name, 'email' => 'alice@example.com', 'phone' => '123-456-7890'],
            ['name' => $faker->name, 'email' => 'bob@example.com', 'phone' => '987-654-3210'],
        ]);
    }
}
