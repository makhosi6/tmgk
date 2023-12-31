<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CaseSeeder::class,
            CustomerSeeder::class,
            PolicySeeder::class,
            CustomersCasesSeeder::class,
            CourseSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            CourseStudentsSeeder::class
        ]);
    }
}
