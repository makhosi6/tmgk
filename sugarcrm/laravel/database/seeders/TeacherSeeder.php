<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('lt_teacher')->insert([
            ['name' => $faker->name, 'email' => 'john@example.com', 'phone' => '555-123-4567'],
            ['name' => $faker->name, 'email' => 'emily@example.com', 'phone' => '111-222-3333'],

        ]);
    }
}
