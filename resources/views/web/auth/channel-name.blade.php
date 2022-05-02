@extends('web.layouts.app')

@section('content')


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<style type="text/css">

    .log-form {
      width: 100%;
      min-width: 320px;
      max-width: 583px;
      background: #fff;
      position: relative;
      border-radius: 10px;
      margin:20px auto;
      height: 387px;
      /*top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);*/
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    }
    @media (max-width: 40em) {
      .log-form {
        width: 95%;
        position: relative;
        margin: 2.5% auto 0 auto;
        left: 0%;
        -webkit-transform: translate(0%, 0%);
        -moz-transform: translate(0%, 0%);
        -o-transform: translate(0%, 0%);
        -ms-transform: translate(0%, 0%);
        transform: translate(0%, 0%);
      }
    }
    .log-form form {
      display: block;
      width: 100%;
      padding: 2em;
    }
    .log-form h2 {
      color: #fff;
      font-family: 'open sans condensed';
      font-size: 1em;
      display: block;
      background: #5f2652;
      width: 100%;
      border-radius: 10px 10px 0px 0px;
      text-transform: uppercase;
      padding: 0.75em 1em 0.75em 1.5em;
      box-shadow: inset 0px 1px 1px rgba(255, 255, 255, 0.05);
      border: 1px solid #1d1d1d;
      margin: 0;
      font-weight: 200;
    }
    .log-form input {
      display: block;
      margin: auto auto;
      width: 100%;
      margin-bottom: 2em; 
      padding: 0.5em;
      border: none;
      border: 1px solid #eaeaea;
      color: #000;
    }
    .log-form input:focus {
      outline: none;
    }
    .log-form .btn {
      display: inline-block;
      background: #5F2652;
      border: 1px solid #5F2652;
      padding: 0.5em 2em;
      color: white;
      margin-right: 0.5em;
      box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.2);
    }
    .log-form .btn:hover {
      background: #23cad5;
      border-color:#23cad5;
    }
    .log-form .btn:active {
      background: #1fb5bf;
      border-color:#1fb5bf;
      box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.1);
    }
    .log-form .btn:focus {
      outline: none;
    }
    .log-form .forgot {
      color: #0b2fe2;
      line-height: 0.5em;
      position: relative;
      font-weight: 600;
      top: 1.5em;
      text-decoration: none;
      font-size: 1rem;
      margin: 0;
      padding: 0;
      float: right;
    }
    .create{
        color: #0b2fe2;
        font-weight:600;
    }
    .log-form .forgot:hover {
      color: #1ba0a9;
    }
    .log-form p {
        font-size: 14px;
        margin: 0 0 16px 0;
    }
    .login-logo{max-width:150px;width:100%;}

    .log-form .d-flex{
      align-items: center;
      justify-content: center;
    }
      </style>


<div class="container">
    
	<div class="log-form">
	      @foreach (['danger', 'warning', 'success', 'info'] as $key)
                @if(Session::has($key))
                    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                @endif
            @endforeach

	  <h2 class="d-flex"><img class="img-responsive login-logo" src="{{asset('assets/img/use/smalllogo.png')}}">
	  	</h2>
	 <form method="get" action="{{ route('preview-channel')}}" >
        @csrf
	  	
	  	
	  	<hr/>
	  	<div class="row">
	  		<div class="col-md-12">
	  			<label style="color:#000;">Enter Channel Name *</label>
	    		<input type="text" title="Channel Name" placeholder="Channel Name" name="channel_name" value="{{ old('email')}}"  required />
	    		<input type="hidden" name="url" value="{{$_SERVER['HTTP_REFERER']}}">
	  		</div>
	  		
	  		<div class="col-md-12 form-group">
			    <button type="submit" class="btn">continue</button>
			    {{-- <a class="forgot" href="#">Forgotten my password</a> --}}
	  		</div>
	  		{{-- <div class="col-md-12">
	  			<p>Not registered? <a class="create" href="{{url('/sign-up')}}">Create an account</a></p>
	  		</div> --}}
	  	</div>
	  </form>
	</div><!--end log form -->
</div>
@endsection
