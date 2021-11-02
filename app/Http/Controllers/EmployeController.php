<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;

class EmployeController extends Controller
{
    //
    public function index(){
        $employes = employe::all();
        return view('employee.index',compact('employes'));
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        $employeData = request()->except('_token');
        employe::insert($employeData);
        return redirect('/employee');
    }
    public function edit($id)
    {
        $employe = employe::findOrFail($id);
        return view('employee.form');
    }
    public function update(Request $request, $id)
    {
        $employeData = request()->except('_token');
        $employe = employe::findOrFail($id);
        $employe->update($employeData);
        return redirect()->route('employee.index');
    }
    public function destroy($id)
    {
        $deleted = employe::destroy($id);
        return redirect()->route('employee.index');
    }
}
