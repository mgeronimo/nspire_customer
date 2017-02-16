@extends('material-layout.material_app_home')
@section('additional_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection
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

                            @if (Session::get('status'))
                                <br/>
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                            @if (Session::get('warning'))
                                <br/>
                                <div class="alert alert-warning">
                                    {{ Session::get('warning') }}
                                </div>
                            @endif
                            @if ($errors->has('error'))
                                <br/>
                                <div class="alert alert-danger">
                                    {{ $errors->first('error') }}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger" style="margin: 0 10px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="frmUpdateProfile" action="{{url('/profile')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{-- <form> --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input name="username" type="text" class="form-control profile-field"
                                                   value="{{ $user->username}}" readonly>
                                            <!--<p>{{ $user->username }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input name="email" type="text" class="form-control profile-field"
                                                   value="{{ $user->email}}" readonly>
                                            <!--<p style="overflow: overlay;">{{ $user->email }}</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fist Name</label>
                                            <input name="first_name" type="text" class="form-control profile-field"
                                                   value="{{ $user->first_name}}" readonly>
                                            <!--<p style="overflow: overlay;">{{ old('first_name') || $user->first_name }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Middle Name</label>
                                            <input name="middle_name" type="text" class="form-control profile-field"
                                                   value="{{ $user->middle_name}}" readonly>
                                            <!--<p style="overflow: overlay;">{{ $user->middle_name }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input name="last_name" type="text" class="form-control profile-field"
                                                   value="{{ $user->last_name}}" readonly>
                                            <!--<p style="overflow: overlay;">{{ $user->last_name }}</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Birthdate</label>
                                            <input name="birthdate" type="text"
                                                   class="form-control profile-field datepicker"
                                                   value="{{ $user->birthdate}}" readonly>
                                            <!--<p>{{ $user->birthdate }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contact Number</label>
                                            <input name="telephone_number" type="text"
                                                   class="form-control profile-field"
                                                   value="{{ $user->phone_number}}" readonly>
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
                                            <input name="address_line1" type="text" class="form-control profile-field"
                                                   value="{{ $user->address_line1}}" readonly>
                                            <!--<p style="overflow: overlay;">{{ $user->address_line1 }}</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input name="city" type="text" class="form-control profile-field"
                                                   value="{{ $user->city_line1}}" readonly>
                                            <!--<p>@if($user->city == "") None @else {{ $user->city }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">State</label>
                                            <input name="state" type="text" class="form-control profile-field"
                                                   value="{{ $user->zone['name']}}" readonly>
                                            <!--<p>@if($user->zone['name'] == "") None @else {{ $user->zone['name'] }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Postal Code</label>
                                            <input name="postal_code" type="text" class="form-control profile-field"
                                                   value="{{ $user->zip_line1}}" readonly>
                                            <!--<p>@if($user->zip_line1 == "") None @else {{ $user->zip_line1 }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input name="country" type="text" class="form-control profile-field"
                                                   value="{{ $user->country['name']}}" readonly>
                                            <!--<p>@if($user->country['name'] == "") None @else {{ $user->country['name'] }} @endif</p>-->
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    {{-- <div class="col-md-12"><h6>SSN Details</h6></div> --}}
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ID No</label>
                                            <input name="id_no" type="text" class="form-control profile-field"
                                                   value="{{ $user->id_number}}" readonly>
                                            <!--<p>@if($user->id_number == "") None @else {{ $user->id_number }} @endif</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ID Type</label>
                                            <select required="true" class="form-control"
                                                    data-style="btn btn-primary btn-round"
                                                    title="Single Select" data-size="7"
                                                    name="id_type">
                                                <option value="SSN" @if($user->id_type == "SSN") selected  @endif>SSN
                                                </option>
                                                <option value="TIN"  @if($user->id_type == "TIN") selected  @endif>TIN</option>
                                                <option value="EIN"  @if($user->id_type == "EIN") selected  @endif>EIN</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr/>

                                <button id="save" onclick="demo.saveProfile()" type="submit"
                                        class="btn btn-rose pull-right hidden">
                                    Save
                                </button>
                                <button type="button" id="editProfile" class="btn btn-rose pull-right"
                                        onclick="demo.editProfile()">
                                    Edit
                                    Profile
                                </button>
                                <button type="button" id="cancelEdit" class="btn btn-rose pull-right hidden"
                                        onclick="demo.cancelEdit()">
                                    Cancel
                                    Update
                                </button>
                                <div class="clearfix"></div>
                                {{-- </form> --}}
                                {!! csrf_field() !!}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="../../assets/img/faces/marc.jpg"/>
                            </a>
                        </div>
                        <div class="card-content">
                            <h6 class="category text-gray">ROLE</h6>
                            <h4 class="card-title">{{ $user->first_name.' '.$user->last_name }}</h4>

                            <p class="description">
                                Don't be scared of the truth because we need to restart the human foundation in truth
                                And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p><br/>
                            {{-- <a href="#" class="btn btn-rose btn-round">Edit</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection