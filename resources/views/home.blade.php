@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Dashboard</h3> @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1> This is header</h1>
                    </div>
                    <div class="card-body">
                        <p> This is body</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1> This is header 2</h1>
                    </div>
                    <div class="card-body">
                        <p> This is body 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
