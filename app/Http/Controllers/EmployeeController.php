<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function store(EmployeeRequest $request){
        Employee::create($request->all());
    }

    public function update(){
        
    }

    public function destroy(){

    }

    public function getEmployees(){
        $employees=Employee::all();
        return $employees;
    }
}
