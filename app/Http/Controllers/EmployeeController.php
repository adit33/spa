<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function store(Request $request){
        // Employee::create($request->all());
        return dd($request->all());
    }

    public function update($id,EmployeeRequest $request){
        $employee=Employee::find($id);
        $employee->first_name=$request->input('first_name');
        $employee->last_name=$request->input('last_name');
        //$employee->image
        $employee->save();
    }

    public function destroy($id){
        $employee=Employee::find($id);
        $employee->delete();
    }

    public function getEmployees(){
        $employees=Employee::all();
        return $employees;
    }

    public function getEmployee($id){
        $employee = Employee::find($id);
        return $employee;
    }
}
