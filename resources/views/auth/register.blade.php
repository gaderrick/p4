@extends('layouts.master')

@section('pagename')
    Register
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-4 center'>
            <div style='height: 15px;'></div>
            <div class='center' style='text-align: center'>Enter your information below to register</div>
            <div style='height: 10px;'></div>
            <div>
                <form method='POST' action='{{ route('register') }}'>
                    {{ csrf_field() }}

                    <div class='form-group{{ $errors->has('name') ? ' has-error' : '' }}'>
                        <label for='name' class='col-md-12 control-label'>Name</label>
                        <div class='col-md-12'>
                            <input id='name' type='text' class='form-control' name='name' value='{{ old('name') }}'
                                   required autofocus>
                            @if ($errors->has('name'))
                                <span class='help-block alert-danger'>
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class='form-group{{ $errors->has('email') ? ' has-error' : '' }}'>
                        <label for='email' class='col-md-12 control-label'>E-Mail Address</label>

                        <div class='col-md-12'>
                            <input id='email' type='email' class='form-control' name='email' value='{{ old('email') }}'
                                   required>
                            @if ($errors->has('email'))
                                <span class='help-block alert-danger'>
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class='form-group{{ $errors->has('password') ? ' has-error' : '' }}'>
                        <label for='password' class='col-md-12 control-label'>Password</label>
                        <div class='col-md-12'>
                            <input id='password' type='password' class='form-control' name='password' required>

                            @if ($errors->has('password'))
                                <span class='help-block alert-danger'>
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='password-confirm' class='col-md-12 control-label'>Confirm Password</label>
                        <div class='col-md-12'>
                            <input id='password-confirm' type='password' class='form-control'
                                   name='password_confirmation' required>
                        </div>
                    </div>

                    <div class='form-group'>
                        <div class='col-md-12'>
                            <button type='submit' class='btn btn-primary'>
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection