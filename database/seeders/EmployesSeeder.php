<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\employe;
use Illuminate\Database\Seeder;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employee')->delete();
        employe::create([
            'name' => 'Antonio ozuna',
            'email' => 'ElNegritoOjosClaros@gmail.com',
            'admission_date' => '04/30/2020'
        ]);

    }
}
