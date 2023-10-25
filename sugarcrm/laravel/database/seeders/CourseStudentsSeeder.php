<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lt_course_students')->insert([
            ['course_id' => 1, 'student_id' => 1],
            ['course_id' => 1, 'student_id' => 2],
            ['course_id' => 2, 'student_id' => 2],

        ]);
    }
}
