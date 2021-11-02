<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\employe;

class EmployeeTest extends TestCase
{

    public function test_getemployee()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
