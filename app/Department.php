<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';
    public function deptManager(){
        return $this->hasMany(Dept_manager::class, 'dept_no', 'dept_no');
    }
}
