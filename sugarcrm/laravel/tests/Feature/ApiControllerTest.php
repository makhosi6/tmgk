<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiControllerTest extends TestCase
{



    /** Disabled this test because SQLite syntax not compatible with MySQL */
    // public function test_update_has_correct_id_number()
    // {
    //     $this->seed();
    //     $response = $this->put('/api/lists/customers/update-id-number-status');
    //     $response->assertStatus(200);
    //     $response->assertJsonStructure([
    //         "*" => [
    //             "last_name",
    //             "first_name",
    //             "id_number",
    //             "id_number_status"
    //         ]
    //     ]);
    // }

    /** Disabled this test because SQLite syntax not compatible with MySQL */
    // public function test_get_customers_with_policy_names_success()
    // {

    //     $this->seed();
    //     $response = $this->get('/api/lists/customers/with-policy-names',);

    //     $response->assertStatus(200);
    //     $response->assertJsonStructure([
    //         "*" => [
    //             "last_name",
    //             "first_name",
    //             "id_number",
    //             "policy_names"
    //         ]
    //     ]);
    // }


    public function test_add_customer_to_case_success()
    {

        $this->seed();
        $response = $this->put('/api/module/lt_case/1/add-customer', array("id_number" => '9112120000000'),);
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "id",
            "case_id",
            "policy_id",
            "type",
            "status",
            "name",
            "description",
            "created_at",
            "updated_at",
            "customers",
            "policies",
            "cases",
        ]);
    }
    public function test_add_customer_to_case_failure()
    {
        $fakeId = "0000000000000";
        $response = $this->put('/api/module/lt_case/1/add-customer', array("id_number" => $fakeId));

        $response->assertStatus(500);
        $response->assertJson(array(
            "message" => "Customer with id number `" . $fakeId . "` not found!",
            "code" => 500
        ));
    }
    public function test_get_courses_with_students_and_teacher()
    {
        $response = $this->get('/api/lists/courses');

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'course_id',
                    'course_name',
                    'teacher' => [
                        'teacher_id',
                        'teacher_name',
                    ],
                    'students' => [
                        '*' => [
                            'student_id',
                            'student_name',
                        ],
                    ],
                ],
            ]);
    }
}
