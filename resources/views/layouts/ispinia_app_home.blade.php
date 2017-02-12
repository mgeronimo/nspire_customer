<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('page_title')</title>

    <link href="{{ url('assets/ispinia_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/ispinia_assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('assets/ispinia_assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('assets/ispinia_assets/css/style.css') }}" rel="stylesheet">

    @yield('additional_css')

</head>

<body>

    <div id="wrapper">
    <!-- Side Nav Bar -->
    @include('layouts.sidebar')
    <!-- Side Nav Bar End -->

        <!-- Content Wrapper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Top Nav Bar -->
            @include('layouts.top_navbar')
            <!-- Top Nav Bar End-->
            
            <!-- BreadCrumb -->
            @include('layouts.breadcrumb')
            <!-- BreadCrumb End-->

            <!-- Content -->
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    @yield('content')
                </div>
            </div>
            <!-- Content End -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- Footer End -->
        </div>
        <!-- Content Wrapper End -->
    </div>



    <!-- Mainly scripts -->
    <script src="{{ url('assets/ispinia_assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('assets/ispinia_assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/ispinia_assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ url('assets/ispinia_assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ url('assets/ispinia_assets/js/inspinia.js') }}"></script>
    <script src="{{ url('assets/ispinia_assets/js/plugins/pace/pace.min.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('assets/ispinia_assets/js/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Peity -->
    <script src="{{ url('assets/ispinia_assets/js/demo/peity-demo.js') }}"></script>

    @yield('additional_js')

</body>

</html>
