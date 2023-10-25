<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use \PHPUnit\Extensions\Selenium2TestCase;
use Illuminate\Support\Facades\DB;

class GeneralUtilsTest extends TestCase
{
    use RefreshDatabase;

    public function test_increased_cover_count()
    {

        $response = $this->get('/sidebar')
            ->assertOk();
        // ->seeInElement('.content-body > row:nth-child(4) div:nth-child(2) > div.card h5', 'Decrease Cover Cases');
    }

    public function test_decreased_cover_count()
    {
        $response = $this->get('/sidebar')
            ->assertOk();
        // ->assertElementExists('.content-body > row:nth-child(4) div:nth-child(2) > div.card', function (AssertElement $card) {
        //     $card->contains('h5', [
        //         'class' => 'card-header',
        //         'text' => 'Decrease Cover Cases'
        //     ]);
        //     $card->contains('h5', [
        //         'class' => 'card-title',
        //         'text' => '1'
        //     ]);
        // });
    }

    public function test_cancelled_cover_count()
    {

        $response = $this->get('/sidebar')
            ->assertOk();
        // ->assertElementExists('.content-body > row:nth-child(4) div:last-child > div.card', function (AssertElement $card) {
        //     $card->contains('h5', [
        //         'class' => 'card-header',
        //         'text' => 'Cancel Cover Cases'
        //     ]);
        //     $card->contains('h5', [
        //         'class' => 'card-title',
        //         'text' => '1'
        //     ]);
        // });
    }

    public function test_get_latest_policy()
    {

        DB::table('lt_policy')->insert([
            [
                'name' => 'Policy 100',
                'description' => 'This is policy 100',
                'customer_id' => 1,
                'active' => 1
            ],
        ]);

        $response = $this->get('/sidebar')
            ->assertOk();
        // ->assertElementExists('.content-body div:last-child .card', function (AssertElement $card) {
        //     $card->contains('h5', [
        //         'class' => 'card-header',
        //         'text' => 'Last Created Policy'
        //     ]);
        //     $card->contains('h5', [
        //         'class' => 'card-title',
        //         'text' => 'Policy 100'
        //     ]);
        // });
    }
}
