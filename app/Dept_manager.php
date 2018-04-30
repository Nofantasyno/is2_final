<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_manager extends Model
{
    public $table = 'dept_manager';
    public function emp(){
        return $this->belongsTo(Employee::class, 'emp_no', 'emp_no');
    }
}
