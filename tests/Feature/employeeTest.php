<?php

namespace Tests\Feature;
use App\Models\employe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class employeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function list_of_employe_can_bre_retireved()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/employee');
        $employes = employe::all();
        $response->assertViewIs('employee.index');
        $response->assertViewHas('employes', $employes);
    }
    /** @test */
    public function an_employe_can_be_created ()
    {
        $response = $this->post('/employee',[
            'name' =>'Alberto Munoz',
            'email' => 'Munozalb@gmail.com',
            'admission_date' => '10-03-2020',
        ]);
        $this->assertCount(2,employe::all());
        $employe = employe::latest('id')->first();
        $this->assertEquals($employe->name, 'Alberto Munoz');
        $this->assertEquals($employe->email, 'Munozalb@gmail.com');
        $this->assertEquals($employe->admission_date, '10-03-2020');
    }
    /** @test */
    public function an_employe_can_be_updated ()
    {
        $employe = employe::where('id',1)->first();
        $response = $this->patch('/employee/'. $employe->id,[
            'name' =>'Enrique Bermudez',
            'email' => 'ElPerroBermudez@gmail.com',
            'admission_date' => '10-03-2021',
        ]);
        $this->assertCount(2,employe::all());
        $employe = $employe->fresh();
        $this->assertEquals($employe->name, 'Enrique Bermudez');
        $this->assertEquals($employe->email, 'ElPerroBermudez@gmail.com');
        $this->assertEquals($employe->admission_date, '10-03-2021');
        $response->assertRedirect('/employee');
    }
    /** @test */
    public function an_employe_can_be_deleted ()
    {
        $id = 2;
        $response = $this->delete('/employee/'.$id);
        $this->assertCount(1,employe::all());
        $response->assertRedirect('/employee');
    }
}
