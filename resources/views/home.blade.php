@extends('layouts.master')

@section('pagename')
    Home
@endsection

@section('content')
    <br><br><br>
    This is the home page
    <br><br><br>
    <a href="{{ route('org.index') }}">List of organizations</a><br>
@endsection