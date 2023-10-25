<?php

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_case'] = [

    'label' => 'Case',
    'detail_view_class' => 'CaseDetailView',
    'edit_view_class' => 'CaseEditView',
    'related_modules' => [
        'lt_policy' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'customers_cases',
            'join_key_lhs' => 'customer_id',
            'join_key_rhs' => 'case_id',
        ],
        'lt_customer' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'customers_cases',
            'join_key_lhs' => 'customer_id',
            'join_key_rhs' => 'case_id',
        ],
        'lt_case' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'customers_cases',
            'join_key_lhs' => 'customer_id',
            'join_key_rhs' => 'case_id',
        ],
    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        //Add more fields here
        'case_id' => ['type' => 'integer', 'length' => 100, 'default' => null, 'null' => true],
        'policy_id' => ['type' => 'integer', 'length' => 100, 'default' => null, 'null' => true],
        'type' => ['type' => 'text', 'length' => 20, 'default' => null, 'null' => true],
        'status' => ['type' => 'varchar', 'length' => 6, 'default' => 'open', 'null' => false]
    ],
    'detail_view_fields' => [
        ['name', 'description'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
    ],

    'list_view_fields' => ['name', 'description'],
];
