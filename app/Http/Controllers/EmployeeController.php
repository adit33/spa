<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function store(Request $request){
        Employee::create($request->all());
    }

    public function update(){
        
    }

    public function destroy(){

    }
}
