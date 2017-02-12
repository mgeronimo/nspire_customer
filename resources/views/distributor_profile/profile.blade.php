@extends('material-layout.material_app_home')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">User Profile
                                {{-- <small class="category">{{ $user->first_name }}'s profile</small> --}}
                            </h4>
                            {{-- <form> --}}
                                <div class="row">
                                    <!--<div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Company (disabled)</label>
                                            {{-- <input type="text" class="form-control" disabled> --}}
                                            <p>@if($user->company == "") None @else {{ $user->company }} @endif</p>
                                        </div>
                                    </div>-->
                                    {{-- <div class="col-md-12"><h6>Basic Information</h6></div> --}}
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->username}}" readonly> 
                                            <!--<p>{{ $user->username }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->email}}" readonly> 
                                            <!--<p style="overflow: overlay;">{{ $user->email }}</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fist Name</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->first_name}}" readonly> 
                                            <!--<p style="overflow: overlay;">{{ $user->first_name }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Middle Name</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->middle_name}}" readonly> 
                                            <!--<p style="overflow: overlay;">{{ $user->middle_name }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->last_name}}" readonly> 
                                            <!--<p style="overflow: overlay;">{{ $user->last_name }}</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Birthdate</label>
                                            <input type="text" class="form-control profile-field datepicker" value="{{ $user->birthdate}}" readonly> 
                                            <!--<p>{{ $user->birthdate }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contact Number</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->phone_number}}" readonly> 
                                            <!--<p>@if($user->phone_number == "") None @else {{ $user->phone_number }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    {{-- <div class="col-md-12"><h6>Address</h6></div> --}}
                                    <div class="col-md-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address Line 1</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->address_line1}}" readonly> 
                                            <!--<p style="overflow: overlay;">{{ $user->address_line1 }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->city}}" readonly> 
                                            <!--<p>@if($user->city == "") None @else {{ $user->city }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">State</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->state_line1}}" readonly> 
                                            <!--<p>@if($user->state_line1 == "") None @else {{ $user->state_line1 }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->zip_line1}}" readonly> 
                                            <!--<p>@if($user->zip_line1 == "") None @else {{ $user->zip_line1 }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->country}}" readonly> 
                                            <!--<p>@if($user->country == "") None @else {{ $user->country }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    {{-- <div class="col-md-12"><h6>SSN Details</h6></div> --}}
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">SSN</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->ssn}}" readonly> 
                                            <!--<p>@if($user->sss == "") None @else {{ $user->sss }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">EIN</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->ein}}" readonly> 
                                            <!--<p>@if($user->ein == "") None @else {{ $user->ein }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">TIN</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->tin}}" readonly> 
                                            <!--<p>@if($user->tin == "") None @else {{ $user->tin }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    {{-- <div class="col-md-12"><h6>Card Details</h6></div> --}}
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Card Name</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->cc_name}}" readonly> 
                                            <!--<p>{{ $user->cc_name }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Card Number</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->cc_no}}" readonly> 
                                            <!--<p>{{ $user->cc_no }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Expiry Date</label>
                                            <input type="text" class="form-control profile-field" value="{{ $user->cc_expiry}}" readonly> 
                                            <!--<p>{{ $user->cc_expiry }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">CVC</label>
                                             <input type="text" class="form-control profile-field" value="{{ $user->cc_cvc}}" readonly> 
                                            <!--<p>{{ $user->cc_cvc }}</p>-->
                                        </div>
                                    </div>
                                </div>
                                <button id="save" onclick="demo.saveProfile()" type="submit" class="btn btn-rose pull-right" disabled>Save</button>
                                <button id="editProfile" class="btn btn-rose pull-right" onclick="demo.editProfile()">Edit Profile</button>
                                <div class="clearfix"></div>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="../../assets/img/faces/marc.jpg" />
                            </a>
                        </div>
                        <div class="card-content">
                            <h6 class="category text-gray">ROLE</h6>
                            <h4 class="card-title">{{ $user->first_name.' '.$user->last_name }}</h4>
                            <p class="description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p><br/>
                            {{-- <a href="#" class="btn btn-rose btn-round">Edit</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection