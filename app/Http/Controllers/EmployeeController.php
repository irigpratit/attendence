<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Employee;
use Illuminate\Support\Facades\DB;
use App\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
//        dd($employees[0]->departments->name);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        return view('employee.create',compact('departments'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'address'=>'required|string|max:255',
            'contact'=>'required|regex:/(9)[0-9]{9}/',
            'departments_id'=>'required|integer|max:10'
        ]);

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'departments_id' => $request->departments_id,
            ]);
        return redirect('/empcreate')->with('success','New Employee Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department=Department::all();
        $employee=Employee::find($id);
        return view('employee.edit',compact('department','employee','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, $id)
    {
        $employee=Employee::find($id);

        Employee::update([
            'name' => $request->name,
            'email' => $request->email,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'departments_id' => $request->departments_id,
        ]);
        return redirect('/empindex')->with('success','Updated Employee Record');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, $id)
    {
    $employee=Employee::find($id);
    $employee->delete();
        return redirect('/empindex')->with('success','Deleted Employee Record');

    }

    public function details($id) {
        $employee = Employee::find($id);
        $statuses = Attendence::where('employee_id', $id)->get();
        return view('employee.details', compact('employee', 'statuses'));
    }
}
