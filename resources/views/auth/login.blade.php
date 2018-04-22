@extends('layouts.master')

@section('pagename')
    Login
@endsection

@section('content')
    <div class="container">
        <div class="col-md-4 center">
            <div style="height: 15px;"></div>
            <div class="center" style="text-align: center">Login using your existing credentials</div>
            <div style="height: 10px;"></div>
            <div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block alert-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-12 control-label">Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block alert-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div style="text-align: center">or authenticate with one of these</div>
            <div style="height: 15px;"></div>
            <div class="col-md-12" style="text-align: center">
                <a href="{{ route('social.oauth', 'facebook') }}">
                    <img width="36" src="{{ asset('images/icon-facebook-logo.svg') }}" alt="Facebook"></a> &nbsp;
                <a href="{{ route('social.oauth', 'google') }}">
                    <img width="36" src="{{ asset('images/icon-google-plus-logo.svg') }}" alt="Google"></a> &nbsp;
                <a href="{{ route('social.oauth', 'github') }}">
                    <img width="36" src="{{ asset('images/icon-github-logo.png') }}" alt="Github"></a> &nbsp;
                <a href="{{ route('social.oauth', 'linkedin') }}">
                    <img width="36" src="{{ asset('images/icon-linkedin-logo.svg') }}" alt="LinkedIn"></a> &nbsp;
                <a href="{{ route('social.oauth', 'twitter') }}">
                    <img width="36" src="{{ asset('images/icon-twitter-logo.svg') }}" alt="Twitter"></a>
            </div>
        </div>
    </div>
@endsection