<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}"/>
    <link rel="icon" type="image/png" href="{{ url('assets/img/favicon.png') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Nspire Network - Customer Registration</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="{{ url('assets/css/material-dashboard.css') }}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('assets/css/demo.css') }}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
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
                    <a href="{{ url('/replicated') }}">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('/shop') }}">
                        <i class="material-icons">shopping_cart</i> Shop
                    </a>
                </li>
                <li class=" active ">
                    <a href="{{ url('/register') }}">
                        <i class="material-icons">person_add</i> Register
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('/login') }}">
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
    <div class="full-page register-page" filter-color="black" data-image="{{ url('assets/img/login.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Customer Registration</h2>

                        <div class="wizard-container">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger" style="margin: 0 10px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card wizard-card" data-color="rose" id="wizardProfile">
                                <form id="registerForm" class="form" method="POST" action="{{ url('register') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Join us now. Be nSpired!
                                        </h3>
                                        <h5>Fill in the information fields and choose your first order products.</h5>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li>
                                                <a href="#about" data-toggle="tab">Personal Details</a>
                                            </li>
                                            <li>
                                                <a href="#account" data-toggle="tab">Contact Details</a>
                                            </li>
                                            <li>
                                                <a href="#network" data-toggle="tab">Network Details</a>
                                            </li>
                                            <li>
                                                <a href="#package" data-toggle="tab">Product Packages</a>
                                            </li>
                                            <li>
                                                <a href="#payment" data-toggle="tab">Payment Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="about">
                                            <div class="row">
                                                <h4 class="info-text"> Let's start with the basic information.</h4>

                                                <div class="">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">First Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="first_name" type="text" class="form-control"
                                                                   value="{{old('first_name')}}">

                                                            @if ($errors->has('first_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Middle Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="middle_name" type="text" class="form-control"
                                                                   value="{{old('middle_name')}}">

                                                            @if ($errors->has('middle_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Last Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="last_name" type="text" class="form-control"
                                                                   value="{{old('last_name')}}">

                                                            @if ($errors->has('last_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">today</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Birthday
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="birthdate" type="text"
                                                                   class="form-control datepicker" value="05/04/2016"
                                                                   value="{{old('birthdate')}}"/>

                                                            @if ($errors->has('birthdate'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('birthdate') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Username
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="username" type="text" class="form-control"
                                                                   value="{{old('username')}}">

                                                            @if ($errors->has('username'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('username') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">contacts</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Email
                                                                <small>(required)</small>
                                                            </label>
                                                            <input email="true" name="email" type="text"
                                                                   class="form-control" value="{{old('email')}}">

                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">fingerprint</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Password
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="password" type="password"
                                                                   class="form-control" value="">

                                                                <span class="help-block">
                                                                    <strong></strong>
                                                                </span>
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">fingerprint</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Confirm Password
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="password_confirmation" type="password"
                                                                   class="form-control" value="">

                                                                <span class="help-block">
                                                                    <strong></strong>
                                                                </span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <div class="row">
                                                <h4 class="info-text">And also your contact details.</h4>

                                                <div class="">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">call</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Phone Number
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="telephone_number" type="number"
                                                                       class="form-control"
                                                                       value="{{old('telephone_number')}}"/>

                                                                @if ($errors->has('telephone_number'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('telephone_number') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">home</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Address
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="address_line1" type="text"
                                                                       class="form-control"
                                                                       value="{{old('address_line1')}}"/>

                                                                @if ($errors->has('address_line1'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('address_line1') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">location_city</i>
                                                            </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">City
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="city" type="text"
                                                                       class="form-control"
                                                                       value="{{old('city')}}"/>

                                                                @if ($errors->has('city'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('city') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">flag</i>
                                                            </span>

                                                            <div class="form-group label-floating">
                                                                <select required="true" class="form-control"
                                                                        data-style="btn btn-primary btn-round"
                                                                        title="Single Select" data-size="7"
                                                                        name="state">
                                                                    <option disabled selected> Choose State</option>
                                                                    @for($i=0; $i<count($zones); $i++)
                                                                        <option value="{{ $zones[$i]['zone_id'] }}"
                                                                                @if(old('state')==$zones[$i]) selected @endif>{{ $zones[$i]['name'] }}</option>
                                                                    @endfor
                                                                </select>

                                                                @if ($errors->has('state'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('state') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">place</i>
                                                            </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Postal Code
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="postal_code" type="text"
                                                                       class="form-control"
                                                                       value="{{old('postal_code')}}"/>

                                                                @if ($errors->has('postal_code'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">public</i>
                                                            </span>

                                                            <div class="form-group label-floating">
                                                                <select required="true" class="form-control"
                                                                        data-style="btn btn-primary btn-round"
                                                                        title="Single Select" data-size="7"
                                                                        name="country">
                                                                    <option disabled selected> Choose country</option>
                                                                    @for($i=0; $i<count($countries); $i++)
                                                                        <option value="{{ $countries[$i]['country_id'] }}"
                                                                                @if(old('country')==$countries[$i]) selected @endif>{{ $countries[$i]['name'] }}</option>
                                                                    @endfor
                                                                </select>

                                                                @if ($errors->has('country'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('country') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">assignment_ind</i>
                                                            </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ID Number
                                                                    <!--<small>(required)</small>-->
                                                                </label>
                                                                <input name="id_no" type="text" class="form-control"
                                                                       required="true" value="{{old('id_no')}}">

                                                                @if ($errors->has('id_no'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('id_no') }}</strong>
                                                                </span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">aspect_ratio</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ID Type
                                                                    <small>(required)</small>
                                                                </label>
                                                                <select required="true" class="form-control"
                                                                        data-style="btn btn-primary btn-round"
                                                                        title="ID Type" data-size="7"
                                                                        name="id_type">
                                                                    <option value="SSN">SSN</option>
                                                                    <option value="TIN">TIN</option>
                                                                    <option value="EIN">EIN</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="network">
                                            <div class="row">
                                                <h4 class="info-text">Network placement and position details.</h4>


                                            </div>
                                        </div>
                                        <div class="tab-pane" id="package">
                                            <div class="row">
                                                <h4 class="info-text">First order product package of your choice.</h4>


                                            </div>
                                        </div>
                                        <div class="tab-pane" id="payment">
                                            <div class="row">
                                                <h4 class="info-text">And your payment details, please.</h4>
                                                <div class="">
                                                    <div class="card-wrapper"></div>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Full Name
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="name" type="text"
                                                                       class="form-control"
                                                                       value="{{old('name')}}"/>
                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Card Number
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="number" type="text"
                                                                       class="form-control"
                                                                       value="{{old('number')}}"/>
                                                                @if ($errors->has('number'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('number') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Expiry
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="expiry" type="tel" class="form-control"
                                                                       value="{{old('expiry')}}"/>
                                                                @if ($errors->has('expiry'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('expiry') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>

                                                            <div class="form-group label-floating">
                                                                <label class="control-label">CVC
                                                                    <small>(required)</small>
                                                                </label>
                                                                <input name="cvc" type="number" class="form-control"
                                                                       value="{{old('cvc')}}"/>
                                                                @if ($errors->has('cvc'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('cvc') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd'
                                                       name='next' value='Next'/>
                                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd'
                                                       name='finish' value='Finish'/>
                                            </div>
                                            <div class="pull-left">
                                                <input type='button'
                                                       class='btn btn-previous btn-fill btn-default btn-wd'
                                                       name='previous' value='Previous'/>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    {!! csrf_field() !!}
                                </form>
                            </div>
                        </div>
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>-->
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('assets/js/demo.js') }}"></script>
<!-- Credit Card plugin -->
<script src="{{ url('assets/js/card/dist/jquery.card.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        demo.initMaterialWizard();
        demo.initFormExtendedDatetimepickers();
        $('form').card({
            // a selector or DOM element for the container
            // where you want the card to appear
            container: '.card-wrapper', // *required*
            // all of the other options from above
        });
    });
</script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
</html>
