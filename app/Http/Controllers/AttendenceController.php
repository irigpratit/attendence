<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Database;
use DB;
use DateTime;
use DateTimeZone;




class AttendenceController extends Controller
{
    public function index(Request $request)
    {
        $timezone = new DateTime("now", new DateTimeZone('Asia/Kathmandu') );
        $now = $timezone->format('Y-m-d H:i:s');
        $employee = Employee::find($request->get('employeeid'));
        $status = Attendence::where('employee_id', $employee->id)->orderBy('created_at','desc')->first();
        return view('welcome', compact('employee','now', 'status'));
    }


    public function pulldata(Request $request)
    {
        $employees = Employee::all($request->get('employeeid'));
        return view('welcome', compact('employees'));
    }

    public function changeStatus(Request $request) {
        $employee_id = $request->employee;
        $status = $request->opt;
        if($status == 1) {
            $attendance = Attendence::create([
                'status' => $status,
                'employee_id' => $employee_id,
            ]);

            return $attendance;
        } else {
            $last_punchin = Attendence::where('employee_id','=',$employee_id)->orderBy('created_at','desc')->first();
            $last_punchin->update([
                'status' => 0,
            ]);
            return $last_punchin;
        }
    }

}

