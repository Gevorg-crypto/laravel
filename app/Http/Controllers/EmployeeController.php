<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;


class EmployeeController extends Controller
{
   public function submit(EmployeeRequest $req){
       $employee= new Employee();
//       dump($employee);
       $employee->first_name = $req->input('first_name');
       $employee->last_name = $req->input('last_name');
       $employee->company = $req->input('company');
       $employee->email = $req->input('email');
       $employee->phone = $req->input('phone');
       $employee->save();

       return redirect()->route('employees');

   }
}
