@extends('material-layout.material_app_home')
@section('additional_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection
@section('content')
    <div class="card card-signup" style="width: 95%; margin: auto; display: block; padding-top: 25px">
        <h2 class="card-title text-center">Referral Registration</h2>

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
            @if(Session::has('status'))
                <div class="alert alert-success" style="margin: 0 10px;">
                    <div class="callout callout-info" style="margin-bottom: 0!important;">
                        <i class="fa fa-fw fa-info-circle"></i> &nbsp;{{ Session::get('status') }}
                    </div>
                </div><br/>
            @endif
            <div class="wizard-card" data-color="rose" id="wizardProfile">
                <form id="registerForm" class="form" method="POST" action="{{ url('add-referral') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                    <div class="wizard-navigation">
                        <ul>
                            <li>
                                <a href="#about" data-toggle="tab">Personal Details</a>
                            </li>
                            <li>
                                <a href="#account" data-toggle="tab">Contact Details</a>
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
                                                                @if(old('state')==$zones[$i]['zone_id']) selected @endif>{{ $zones[$i]['name'] }}</option>
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
                                                                @if(old('country')==$countries[$i]['country_id']) selected @endif>{{ $countries[$i]['name'] }}</option>
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
                                                    <option @if(old('id_type')=="SSN") selected @endif value="SSN">SSN</option>
                                                    <option @if(old('id_type')=="TIN") selected @endif value="TIN">TIN</option>
                                                    <option @if(old('id_type')=="EIN") selected @endif value="EIN">EIN</option>
                                                </select>
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
@stop
@section('additional_js')
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
@stop