<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/costom.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/style.css')}}" type="text/css">
    <title>E-Tailoring</title>
</head>
    <body>

        @include('partials.header')


        @yield('content')

        @include('partials.footer')
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
