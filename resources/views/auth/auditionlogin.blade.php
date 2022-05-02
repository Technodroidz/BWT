@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="newForm">
                <div class="card-header" id="Bgwhite"> {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="radio" name="radiogroup1" id="rd1">
                                <label for="rd1">State & National Competition’s</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="radiogroup1" id="rd2">
                                <label for="rd2">Weekly Buskers Performance</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                 <label for="name" class="col-form-label text-md-right">{{ __('First Name*') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                 <label for="name" class="col-form-label text-md-right">{{ __('Last Name*') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail*') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="verify email" class="col-form-label text-md-right">{{ __('Verify Email*') }}</label>

                                <input id="verify-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="phone" class="col-form-label text-md-right">{{ __('Phone*') }}</label>
                                <input type="text" id="phone" class="form-control" value="" />
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="col-form-label text-md-right">{{ __('Date of Birth: *') }}</label>
                                <input type="date" id="dob" class="form-control" value="" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="city" class="col-form-label text-md-right">{{ __('City*') }}</label>
                                <input type="text" id="city" class="form-control" value="" />
                            </div>
                            <div class="col-md-6">
                                <label for="state" class="col-form-label text-md-right">{{ __('State*') }}</label>
                                <input type="text" id="state" class="form-control" value="" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="input_field checkbox_option">
                                	<input type="checkbox" id="cb1">
                        			<label for="cb1">Please confirm any additional checkboxes required to confirm legal or eligibility requirements.</label>
                                </div>
                                <div class="input_field checkbox_option">
                                	<input type="checkbox" id="cb2">
                        			<label for="cb2">Photo/Video Permission & Release</label>
                                </div>
                                <div class="input_field checkbox_option">
                                	<input type="checkbox" id="cb3">
                        			<label for="cb3">Participant’s Involvement Release</label>
                                </div>
                                <div class="input_field checkbox_option">
                                	<input type="checkbox" id="cb4">
                        			<label for="cb4">Video Consent Release</label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <p>By submitting this Application Form, you agree to be bound by these <a href="#"><strong>Terms and Conditions</strong></a> and <a href="#"><strong>Privacy Policy.*</strong></strong></a></p>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
