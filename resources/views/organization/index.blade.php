@extends('layouts.master')

@section('pagename')
    List of Organizations
@endsection

@section('content')
    <a href='{{ route('org.create') }}'>Add a new organization</a><br>
    <br>
    or
    <br>
    @foreach($organizations as $organization)
        Edit organization: <a href='{{ route('org.edit', $organization->id) }}'>{{ $organization->name }}</a> or
        <a href='{{ route('org.delete', $organization->id) }}'>(DELETE)</a><br>
    @endforeach
@endsection