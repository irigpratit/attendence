<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Department extends Model
{
    protected $fillable = ['name'];

    public function employees() {
        return $this->hasMany('App\Employee','id');
    }
}
