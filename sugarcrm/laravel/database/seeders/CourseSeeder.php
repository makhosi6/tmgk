<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {

        DB::table('lt_course')->insert([
            ['name' => 'Introduction to Insurance', 'teacher_id' => 1, "description" => "This course is designed to introduce you to insurance and how to use it."],
            ['name' => 'Advanced Insurance Concepts', 'teacher_id' => 2, "description" => "This course is designed to introduce you to advanced insurance concepts and how to use it.",]
        ]);
    }
}
