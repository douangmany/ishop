<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token"content="{{csrf_token()}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
</head>



<body>

    @yield('content')


<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>

@yield('script')

</body>
</html>
