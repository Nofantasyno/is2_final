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

class AlternativeController extends Controller
{
    public function index(){
        $dept_managers = array();
        $dept_manager = Dept_manager::where('to_date', '=', '9999-01-01')->get();
        foreach($dept_manager as $data) {
            array_push($dept_managers, $data->emp_no);
        }
        $employees = Employee::join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('titles.to_date', '=', '9999-01-01')
            ->where('salaries.to_date', '=', '9999-01-01')
            ->where('dept_emp.to_date', '=', '9999-01-01')
            ->limit(1000)
            ->paginate(20);

        return view('index', ['employees' => $employees, 'dept_managers' => $dept_managers]);
    }
}