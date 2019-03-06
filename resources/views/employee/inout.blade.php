<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            8 Squaree Infotrants
        </div>

        <div class="card-header bg-transparent clearfix">
            <h4 class="mx-auto">Scan your Employee Card</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('punch_inout')}}">
                {{csrf_field()}}
                <div class="form-group"><label>Your Employee ID is</label>
                    <input type="text" name="employeeid" placeholder=" eg. CLB1B226BD" class="form-control">
                    <button class="btn btn-success float-right" type="submit">
                        <i class="fas fa-check"></i><span>Proceed</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>
