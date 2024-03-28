<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chartist.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/widget.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <style>
        .is-loading {
        }

        /* table .btn {
            display: none;
        }

        .table-hover tbody tr:hover {
            .btn {
                display: inline-block;
            }
        } */

        .btn-new {
            position: absolute;
            top: 2px;
            right: 12px;
        }

    </style>
    @stack('extra_css')
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/chartist.js') }}"></script>
    <script src="{{ asset('js/amcharts.js') }}"></script>
    <script src="{{ asset('js/serial.js') }}"></script>
    <script src="{{ asset('js/light.js') }}"></script>
    <script src="{{ asset('js/pcoded.min.js') }}"></script>
    <script src="{{ asset('js/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form-validation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/underscore-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modalEffects.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('.select2').select2()

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert-success").slideUp(500);
            });
            
        })
    </script>
    @stack('extra_scripts')
</body>
</html>
