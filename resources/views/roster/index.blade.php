@extends('layouts.master')

@section('pagename')
    Manage a Roster
@endsection

@section('content')
    <a href='{{ route('roster.create') }}'>Add a new roster</a><br>
    <br>
    or
    <br>
    @foreach($rosters as $roster)
        Edit roster: <a href='{{ route('roster.edit', $roster->id) }}'>{{ $roster->name }}</a> or
        <a href='{{ route('roster.delete', $roster->id) }}'>(DELETE)</a><br>
    @endforeach
@endsection