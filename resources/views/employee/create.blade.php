@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-xl-7">
                <form method="post">
                    {{csrf_field()}}
                <div class="card-header px-0 mt-2 bg-transparent clearfix">
                        <h4 class="float-left pt-2">New Employee</h4>
                        <div class="card-header-actions mr-1">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> <span class="ml-1">Add Employee</span></button>
                        </div>
                    </div>

                    <div class="card-body px-0">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label for="name">Full Name</label>
                            <input id="name" type="text" name="name" placeholder=" eg. Pratit Raj Giri" class="form-control" value="{{old('name')}}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder=" eg. pratitrajgiri@gmail.com" class="form-control" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder=" eg. 1141 EastAH" class="form-control" autofocus>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('contact')?'has-error':''}}">
                            <label for="contact">Contact Number</label>
                            <input type="tel" name="contact" placeholder=" eg. 9843188611" class="form-control" autofocus>
                            @if ($errors->has('contact'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="departments_id">
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}"> {{ $department->name }} </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection