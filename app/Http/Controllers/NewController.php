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

        return view('index', ['employees' => $employees]);
    }

    public function index2(){
        $employees = Employee::paginate(20);

        return view('index2', ['employees' => $employees]);
    }

    public function departments() {
        $departments = Department::all();
        return view('deps', ['departments' => $departments]);
    }

    public function deptEmp($id) {
        $department = Department::where('dept_no', '=', $id)->first();
        $deptEmps = Dept_emp::where('dept_no', '=', $id)->where('to_date', '=', '9999-01-01')->paginate(10);

        return view('deptEmps', [ 'department'=>$department, 'deptEmps'=>$deptEmps]);
    }

    public function avgSalary(){
        $emps = Employee::
              join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('salaries.to_date', '=', '9999-01-01')
            ->where('dept_emp.to_date', '=', '9999-01-01')
            ->select(DB::raw('AVG(salaries.salary) as average_salary'),'departments.dept_name')
            ->groupBy('dept_emp.dept_no')
            ->paginate(10);

        return view('avgSalary', ['emps'=>$emps]);
    }

    public function gender(){
        $men = Employee::where('gender', '=', 'M')->count('gender');
        $women = Employee::where('gender', '=', 'F')->count('gender');

        return view('gender', ['men'=>$men, 'women'=>$women]);
    }

    public function maxSalary(){
        $jobs = Salary::
          join('titles', 'titles.emp_no', '=', 'salaries.emp_no')
        ->where('salaries.to_date', '=', '9999-01-01')
        ->where('titles.to_date', '=', '9999-01-01')
        ->groupby('titles.title')
        ->get(['title', DB::raw('MAX(salary) as maxsalary')]);

         return view('maxSalary', ['jobs' => $jobs]);
    }

    public function age(){
        $youngest = Employee::orderby('birth_date', 'desc')->limit(1)->first();
        $oldest = Employee::orderby('birth_date', 'asc')->limit(1)->first();

        return view('age', ['youngest' => $youngest, 'oldest' => $oldest]);
    }

}


