@extends('layouts.master')

@section('pagename')
    Home
@endsection

@section('content')
    <br>
    <a href="{{ route('org.index') }}">List of organizations</a><br>
    <a href="{{ route('userdetail.index') }}">List of participants</a><br>
@endsection