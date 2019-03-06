<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = ['employee_id', 'status'];

    public function employee() {
        return $this->belongsTo('App\Employee');
    }
}
