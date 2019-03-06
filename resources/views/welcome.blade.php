<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMS</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row align-content-center">
            <span class="mx-auto"><strong>8 Squaree Infotrants</strong></span>
        </div>
        <div class="row align-content-center">
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
                <tr>
                    <th>Date Time: </th>
                    <td>{{$now}}</td>
                </tr>
            </table>
        </div>

        <div class="row align-content-center">
            @if ( is_null($status))
                <button id="punch" value="1" class="btn btn-primary mx-auto"></i> Punch In</button>
            @elseif($status->status ==0)
                <button id="punch" value="1" class="btn btn-primary mx-auto"></i> Punch In</button>
            @elseif($status->status ==1)
                <button id="punch" value="0" class="btn btn-primary mx-auto"></i> Punch Out</button>
            @endif
        </div>
    </div>
<script>
   $('#punch').on('click', function(){
       console.log($('#punch').val());
       if($('#punch').val() == 1) {
           var data = {
               opt: $('#punch').val(),
               employee: "{{$employee->id}}"
           };

           $.ajax({
               url: "{{route('change_status')}}",
               data: data,
               success: function (response) {
                   console.log('success', response);
                   $('#punch').html("Punch Out");
                   $('#punch').val(0);
                   console.log($('#punch').val());
               }
               });
       }else if($('#punch').val() == 0) {
           var data = {
               opt: $('#punch').val(),
               employee: "{{$employee->id}}"
           };
           $.ajax({
               url: "{{route('change_status')}}",
               data: data,
               success: function (response) {
                   console.log('success', response);
                   $('#punch').html("Punch In");
                   $('#punch').val(1);
                   console.log($('#punch').val());
               }
           });
       }
   })
</script>
</body>
</html>
