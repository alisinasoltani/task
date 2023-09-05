<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomersTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function api_get_customers_works(): void {
        $response = $this->get('http://127.0.0.1:8000/api/customers');

        $response->assertStatus(200);
    }

    public function api_no_customer(): void {
        $id = 1;
        $response = $this->get('http://127.0.0.1:8000/api/customers/$id');
        $response->assertNotFound();
    }
}
