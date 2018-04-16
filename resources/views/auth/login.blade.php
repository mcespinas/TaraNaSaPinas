@extends('layouts.template-accounts')
@section('title') - Sign In @endsection
@section('header') SIGN IN @endsection
@section('content')
    <form class="register-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">E-Mail Address</label>
            <div>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
                    
        <div>
            <label for="password">Password</label>
            <div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        &nbsp;

        <div>
            <div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>
        &nbsp;

        <div>
            <div>
                <button type="submit" class="btn btn-block btn-info">
                    SIGN IN
                </button>
            </div>
        </div>

        <div>
            <div>                     
                <a class="btn btn-block btn-link" href="{{ route('password.request') }}" style="color: white;">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </form>
@endsection