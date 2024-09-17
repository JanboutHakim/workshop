<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function getAllEmp(){
        return Employee::all();
    }
    function findEmp($id){
        return Employee::find($id);
    }
    function addEmp(){
        return view('addemployee');
    }
    public function add(Request $request){
        // add a new Employee
    }
    function deleteEmp(Employee $employee){
        $employee->delete();
    }
    function getManger($username){
        $mangers = [];
        //return a list with employees that their Dept is null
    }
}
