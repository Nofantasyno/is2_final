<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';
    public $primaryKey = 'emp_no';
    public function empSalary()
    {
        return $this->hasOne(Salary::class, 'emp_no', 'emp_no')->latest('to_date');
    }

    public function empTitle()
    {
        return $this->hasMany(Title::class, 'emp_no', 'emp_no') ;
    }

    public function empDept()
    {
        return $this->hasOne(Dept_emp::class, 'emp_no', 'emp_no')->latest('to_date');
    }

    public function empDeptManager()
    {
        return $this->hasMany(Dept_manager::class, 'emp_no', 'emp_no');
    }


}
