@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if ($errors->has('msg'))
                    <div class="alert alert-warning">
                        {{ $errors->first('msg') }}
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading text-center">Social Login</div>

                    <div class="panel-body">
                        <p class="lead text-center">Authenticate using your social network account from one of following
                            providers</p>
                        <a href="{{ route('social.oauth', 'facebook') }}">
                            <img width="36"
                                 src="{{ asset('images/icon-facebook-logo.svg') }}"
                                 alt="Facebook"></a> &nbsp;
                        <a href="{{ route('social.oauth', 'google') }}">
                            <img width="36"
                                 src="{{ asset('images/icon-google-plus-logo.svg') }}"
                                 alt="Google"></a> &nbsp;
                        <a href="{{ route('social.oauth', 'github') }}">
                            <img width="36"
                                 src="{{ asset('images/icon-github-logo.svg') }}"
                                 alt="Github"></a> &nbsp;
                        <a href="{{ route('social.oauth', 'linkedin') }}">
                            <img width="36"
                                 src="{{ asset('images/icon-linkedin-logo.svg') }}"
                                 alt="LinkedIn"></a> &nbsp;
                        <a href="{{ route('social.oauth', 'twitter') }}">
                            <img width="36"
                                 src="{{ asset('images/icon-twitter-logo.svg') }}"
                                 alt="Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection