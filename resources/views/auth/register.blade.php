@extends('layouts.template-accounts')
@section('title') - Sign Up @endsection
@section('header') SIGN UP @endsection
@section('content')
    <form class="register-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <div>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div>
            <label for="email">E-Mail Address</label>
            <div>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email Address" value="{{ old('email') }}" required>

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

        <div>
            <label for="password-confirm">Confirm Password</label>
            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
            </div>
        </div>
        &nbsp;
        {{Form::hidden('user_type', 'Travel Agency')}}
        <div>
            <div>
                <button type="submit" class="btn btn-block btn-info">
                    SIGN UP
                </button>
            </div>
        </div>
    </form>
@endsection