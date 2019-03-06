@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-xl-7">
                <form method="post">
                    {{csrf_field()}}
                    <div class="card-header px-0 mt-2 bg-transparent clearfix">
                        <h4 class="float-left pt-2">New Department</h4>
                        <div class="card-header-actions mr-1">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> <span class="ml-1">Add Department</span></button>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="form-group"><label>Department Name</label>
                            <input type="text" name="name" placeholder="Production, QA, Developement" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection