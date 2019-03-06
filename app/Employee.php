<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'address','contact','departments_id'
    ];

    public function departments() {
        return $this->belongsTo('App\Department');
    }

    public function employee() {
        return $this->belongsTo('App\Employee');
    }
}
