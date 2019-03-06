<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('empcreate', 'EmployeeController@store');
Route::get('/empindex', 'EmployeeController@index');
Route::get('/empcreate', 'EmployeeController@create');
Route::get ('/employee-details/{id}', 'EmployeeController@details')->name('employee_details');
Route::get ('/employee-edit/{id}', 'EmployeeController@edit')->name('employee_edit');
Route::post ('/employee-edit/{id}', 'EmployeeController@update')->name('employee_edit');
Route::get ('/employee-delete/{id}', 'EmployeeController@destroy')->name('employee_delete');
Route::post('deptcreate', 'DepartmentController@store');
Route::get('/deptcreate', 'DepartmentController@create');
Route::get('/deptindex','DepartmentController@index');

Route::get('/','AttendenceController@pulldata');
Route::post('/punch-inout','AttendenceController@index')->name('punch_inout');
Route::get('/change-status', 'AttendenceController@changeStatus')->name('change_status');

Route::get('/', function () {
    return view('employee.inout');
});
