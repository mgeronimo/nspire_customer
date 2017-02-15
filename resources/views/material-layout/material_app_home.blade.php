<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    @yield('additional_meta')
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nspire Network</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.2.0/r-2.1.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ url('assets/css/material-dashboard.css') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('assets/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>

<body>
    <div class="wrapper">
        <!-- Side Nav Bar -->
        @include('material-layout.sidebar')
        <!--Side Nav Bar End-->
        <div class="main-panel">
            <!--Top Nav Bar-->
            @include('material-layout.top_navbar')
            <!--Top Nav Bar End-->
            <div class="content">
                @yield('content')
            </div>
            <!--Footer-->
            @include('material-layout.footer');
            <!--Footer End-->
        </div>

    </div>

</body>

<!--   Core JS Files   -->
<script src="{{ url('assets/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ url('assets/js/moment.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ url('assets/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ url('assets/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('assets/js/bootstrap-notify.js') }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ url('assets/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin -->
<script src="{{ url('assets/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin -->
<script src="{{ url('assets/js/nouislider.min.js') }}"></script>
<!-- Select Plugin -->
<script src="{{ url('assets/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ url('assets/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ url('assets/js/sweetalert2.js') }}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ url('assets/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ url('assets/js/fullcalendar.min.js') }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ url('assets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ url('assets/js/material-dashboard.js') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets/js/demo.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.2.0/r-2.1.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        if (window.location.pathname == "/" || window.location.pathname == "/home") {
            demo.initDashboardPageCharts();
            demo.initVectorMap();
        }
        if (window.location.pathname == "/edit-profile") {
            demo.initMaterialWizard();
        }
    });
</script>

@yield('additional_js')

</html>
