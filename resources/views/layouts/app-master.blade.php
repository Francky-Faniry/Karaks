<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUN KARAK'S</title>

    <link rel="stylesheet" href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}">
    <style>
        .bd-placeholder-img{
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media(min-width:768px){
            .bd-placeholder-img-lg{
                font-size: 3.5rem;
            }
        }
    </style>

    <link rel="stylesheet" href="{!! url('assets/css/app.css') !!}">
</head>
<body>
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>