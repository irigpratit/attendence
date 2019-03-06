@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-xl-7">
                <div class="content">
                    <table>
                        <tr>
                            <th>Employee Name: </th>
                            <td>{{$employee->name}}</td>
                        </tr>
                        <tr>
                            <th>Email: </th>
                            <td>{{$employee->email}}</td>
                        </tr>
                        <tr>
                            <th>Contact: </th>
                            <td>{{$employee->contact}}</td>
                        </tr>
                        <tr>
                            <th>Address: </th>
                            <td>{{$employee->address}}</td>
                        </tr>

                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Punch in Time</th>
                            <th>Punch out Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statuses as $status )
                            <tr>
                                @if($status->status == 1)
                                    <td>
                                        <span>{{date('Y-m-d',strtotime($status->created_at))}}</span>
                                    </td>
                                    <td>
                                        <span>{{date('H:i:s',strtotime($status->created_at))}}</span>
                                    </td>
                             @elseif($status->status == 0)
                                    <td>
                                        <span>{{date('Y-m-d',strtotime($status->created_at))}}</span>
                                    </td>
                                <td>
                                    <span>{{date('H:i:s',strtotime($status->created_at))}}</span>
                                </td>
                                <td>
                                    <span>{{date('H:i:s',strtotime($status->updated_at))}}</span>
                                </td>


                                    @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
