<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Salary;
use App\Title;
use App\Dept_emp;
use App\Dept_manager;

class NewController extends Controller
{
    public function index(){
        $employees = Employee::limit(100)->get();

        return view('welcome', ['employees' => $employees]);
    }
    public function departments() {
        $departments = Department::all();
        return view('deps', ['departments' => $departments]);
    }

    public function deptEmp($id) {
        $employees = Employee::paginate(20);
        $dept = Department::find($id);
        return view('deptEmps', ['employees' => $employees, 'dept'=>$dept]);
    }

    public function statistics(){
        $emps = Employee::
              join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('salaries.to_date', '=', '9999-01-01')
            ->where('dept_emp.to_date', '=', '9999-01-01')
            ->select(DB::raw('AVG(salaries.salary) as average_salary'),'departments.dept_name')
            ->groupBy('dept_emp.dept_no')
            ->paginate(10);
        return view('statistics', ['emps'=>$emps]);
    }
}
