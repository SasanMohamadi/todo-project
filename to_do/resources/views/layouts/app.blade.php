<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body >
    @yield('content')


    <script src="{{ asset('/js/app.css') }}"> </script>
    @include('sweet::alert')
</body>
</html>
