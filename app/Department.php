<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';
    public function deptManager(){
        return $this->hasOne(Dept_manager::class, 'dept_no', 'dept_no')->latest('to_date');
    }
}
