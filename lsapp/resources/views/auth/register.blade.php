@extends('layouts.app')
<style type="text/css">
    .bgimg {
        background-image: url('002.jpg');
        height: 600px;
        width: 1260px;
        margin-left: -60px;
        padding: 0px;
    }
    </style>
@section('content')
<div  class="bgimg" >

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style = "margin-top:140px; width: 100% ;height:400px; align:center">
                <div style = "font-size:20px; text-align: center; font-weight: bold" class="card-header">{{ __('Register') }}</div>

                <div class="card-body" style = "margin-top:35px" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label style = "font-size:15px; margin-top:12px" for="name" class="col-md-4 col-form-label text-md-center">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input style = " margin-top:12px; width:250px; height:30px" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style = "font-size:15px; margin-top:10px" for="email" class="col-md-4 col-form-label text-md-center">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input style = " margin-top:12px; width:250px; height:30px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style = "font-size:15px; margin-top:10px" for="password" class="col-md-4 col-form-label text-md-center">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style = "  margin-top:12px; width:250px; height:30px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style = "font-size:15px; margin-top:10px" for="password-confirm" class="col-md-4 col-form-label text-md-center">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input style = " margin-top:12px; width:250px; height:30px" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0" style = "margin-left:85px">
                            <div class="col-md-6 offset-md-4" style = "margin-center:10px; font-size:30px; height:15px; width:50%">
                                <button style = "margin-center:10px; height:40px; width:30%;font-size:18px " type="submit" class="btn btn-primary">
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
