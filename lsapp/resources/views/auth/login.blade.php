@extends('layouts.app')
<style type="text/css">
    .bgimg {
        background-image: url('004.jpg');
        height: 600px;
        width: 1260px;
        margin-left: -60px;
        padding: 0px;

        background-size: 100% 100%;
    }
    </style>
@section('content')


<div class="bgimg">
    <div class="row justify-content-center">
        <div class=""><!--col-md-8-->
            <div class="card" style = "margin-top:140px; width: 150% ;height:300px">
                <div style = "font-size:20px; text-align: center; font-weight:bold" class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf



                        <div class="form-group row">
                            <label style = "font-size:15px; margin-top:20px" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input style = " margin-top:25px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label style = "font-size:15px" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                                <div class="form-check" >
                                    <input style = "margin-right:10px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style = "margin-left:15px; margin-top:2px" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style = "margin-center:10px; font-size:20px; height:15px; width:50%">
                                <button style = "margin-center:10px; height:30px; width:30%" type="submit" class="btn btn-primary">
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
</div>
@endsection


