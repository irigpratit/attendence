@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Departments</div>

                    <div class="card-body">
                        <div class="container">
                            <div class="card-header bg-transparent clearfix">
                                <h4 class="float-left">Department</h4>
                                <div class="card-header-actions mr-1">
                                    <a href="{{url('deptcreate')}}" class="btn btn-success">New Department</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Department Name</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($departments as $department )
                                            <tr>
                                                <td class="d-none d-sm-table-cell">{{$department->id}}</td>
                                                <td><span>{{$department->name}}</span></td>
                                                <td><span>{{$department->created_at}}</span></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="{{url('deptdetails')}}" class="text-muted">
                                                        <i class="fas fa-pencil-alt"></i>
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





