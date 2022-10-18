<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blibioteca</title>
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <link href="{{ asset('./css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">

    @stack('page-styles')
</head>

<body>
    @if(auth()->user())
    @include('layouts.sidebar')
    @include('layouts.header')
    @endif
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    @if(session('error'))
                    <div class="text-center">
                        <span class="text-danger">{{session('error')}}</span>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="text-center">
                        <span class="text-success">{{session('error')}}</span>
                    </div>
                    @endif
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
    <script src="{{ asset('./js/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('./js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{ asset('./js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('./js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{ asset('./js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('./js/scripts.js')}}"></script>
    <script src="{{ asset('./js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{ asset('./js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('./js/lib/weather/weather-init.js')}}"></script>

    @yield('page-scripts')
</body>

</html>