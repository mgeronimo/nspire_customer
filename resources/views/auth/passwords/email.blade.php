<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nspire Network</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
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
<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" ../dashboard.html ">Nspire Network</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li>
                    <a href="../dashboard.html">
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li> -->
                <li class="">
                    <a href="{{ url('/register') }}">
                        <i class="material-icons">person_add</i> Register
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/') }}">
                        <i class="material-icons">fingerprint</i> Login
                    </a>
                </li>
                <!-- <li class="">
                    <a href="lock.html">
                        <i class="material-icons">lock_open</i> Lock
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" filter-color="black" data-image="../assets/img/login.jpeg">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        {{-- <form method="POST" action="{{ url('/login') }}"> --}}
                        <form role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}
                            <div class="card card-login card-hidden">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Reset Password</h4>
                                </div>
                                <div class="card-content">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input id="email" type="email" name="email" required="true" class="form-control" value="{{ old('email') }}">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Send Password Reset Link</button>
                                </div>
                                @if(Session::has('message'))
                                    <div class="no-print">
                                        <div class="callout callout-info" style="margin-bottom: 0!important;">
                                            <i class="fa fa-fw fa-info-circle"></i> &nbsp;{{ Session::get('message') }}
                                        </div>
                                    </div><br/>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="copyright text-center">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://nspirenetwork.com">Nspire Network LLC.</a>, Mission Driven People
                </p>
            </div>
        </footer>
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
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets/js/demo.js') }}"></script>
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
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
</html>
