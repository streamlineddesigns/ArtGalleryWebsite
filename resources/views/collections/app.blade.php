<html>

<head>
    <title>Collections</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--Custom-->
    <link href="{{url('/css/tables.css')}}" rel="stylesheet">
    <!--Color Picker CSS-->
    <link rel="stylesheet" href="{{url('vendor/jquery-hex-colorpicker-master/css/jquery-hex-colorpicker.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>
    @section('sidebar')

    @show

    <x-crudnav/>

    <div class="container py-5">
        @yield('content')
    </div>

    <!--jQuery & Color Picker JS-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/jquery-hex-colorpicker-master/src/jquery-hex-colorpicker.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".hex-color-picker-input").each(function() {
                $(this).hexColorPicker();
            });

            $(".form-control").click(function() {
                $(".picker-form input").attr("readonly", false);
            });
        });
    </script>
</body>

</html>