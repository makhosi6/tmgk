<?php

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_student'] = [

    'label' => 'Student',
    'detail_view_class' => 'StudentDetailView',
    'edit_view_class' => 'StudentEditView',
    'related_modules' => [

        'lt_course' => [
            'relation_key_rhs' => 'id',
            'relationship_type' => 'one-to-many',
        ],
        'lt_teacher' => [
            'relation_key_rhs' => 'id',
            'relationship_type' => 'one-to-many',
        ],
  
    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        //Add more fields here
        'name' => ['type' => 'string', 'length' => 255, 'default' => '', 'null' => false,],
        'email' => ['type' => 'string', 'length' => 255, 'default' => '', 'null' => false,],
        'phone' => ['type' => 'string', 'length' => 255, 'default' => '', 'null' => false,],
    ]
    ,
    'detail_view_fields' => [
        ['name', 'email', 'phone'],
    ],
    'edit_view_fields' => [
        ['name', 'email', 'phone'],
    ],
    'list_view_fields' => ['name', 'email', 'phone'],
];
