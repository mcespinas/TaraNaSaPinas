@extends('layouts.template-accounts')
@section('title') - Reset Password @endsection
@section('header') RESET PASSWORD @endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="register-form" method="POST" action="{{ route('password.email') }}">
        @csrf
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
        &nbsp;

        <div>
            <div>
                <button type="submit" class="btn btn-block btn-info">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
@endsection