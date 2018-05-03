<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_emp extends Model
{
    public $table ='dept_emp';
    public function department(){
        return $this->hasOne(Department::class, 'dept_no', 'dept_no');
    }

    public function deptEmp(){
        return $this->hasOne(Employee::class,  'emp_no', 'emp_no');
    }


}
