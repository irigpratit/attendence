@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List of Registered Employees</div>

                    <div class="card-body">
                        <div class="container">
                            <div class="card-header bg-transparent clearfix">
                                <h4 class="float-left">Employees</h4>
                                <div class="card-header-actions mr-1">
                                    <a href="{{url('empcreate')}}" class="btn btn-success">New employee</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee</th>
                                        <th>Contact</th>
                                        <th>Department</th>
                                        <th>Registered</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee )
                                        <tr>
                                        <td class="d-none d-sm-table-cell">{{$employee->id}}</td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div>{{$employee->name}}</div>
                                                    <div class="small text-muted">{{$employee->email}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{$employee->contact}}</span>
                                        </td>
                                        <td>
                                            <span>{{$employee->departments->name}}</span>
                                        </td>
                                        <td>
                                            <span>{{$employee->created_at}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{route('employee_details', $employee->id)}}" class="text-muted">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{route('employee_edit', $employee->id)}}" class="text-muted">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;    
                                            <a href="{{route('employee_delete', $employee->id)}}" class="text-muted">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection





