<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('plugin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">


</head>

<body>

@include('frontend.layout.header')
@yield('content')
@include('frontend.layout.footer')

<script src="https://kit.fontawesome.com/1fdbb78d95.js" crossorigin="anonymous"></script>

<script src="{{asset('plugin/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('plugin/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
