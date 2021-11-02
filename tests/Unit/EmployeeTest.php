<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\employee;
use Illuminate\Database\Eloquent\Collection;

class EmployeeTest extends TestCase
{    
    public function test_employeed_posts()
    {
        $employee = new employe;
        $this->assertInstanceOf(Collection::class, $employee->posts);
    }
}
