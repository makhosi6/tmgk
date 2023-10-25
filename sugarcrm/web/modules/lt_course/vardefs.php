<?php

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_course'] = [

    'label' => 'Course',
    'detail_view_class' => 'CourseDetailView',
    'edit_view_class' => 'CourseEditView',
    'related_modules' => [

        'lt_teacher' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'teacher_id',
        ],
        'lt_student' => [
            'relationship_type' => 'many-to-many',
            'rhs_module' => 'Student',
            'lhs_table' => 'lt_course_students',
            'rhs_table' => 'lt_student',
            'join_table' => 'lt_course_students',
            'join_key_lhs' => 'course_id',
            'join_key_rhs' => 'student_id',
        ],
    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        //Add more fields here
        'teacher_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
    ],
    'detail_view_fields' => [
        ['name', 'description'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
    ],
    'list_view_fields' => ['name', 'description'],
];
