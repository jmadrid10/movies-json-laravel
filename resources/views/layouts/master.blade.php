<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link href="{{ asset('vendor/mdb/css/mdb.min.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
    @include('layouts.header')
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- MDB Js -->
    <script src="{{ asset('vendor/mdb/js/mdb.min.js') }}"></script>
</body>
</html>