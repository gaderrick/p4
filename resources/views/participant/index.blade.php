@extends('layouts.master')

@section('pagename')
    List of Participants
@endsection

@section('content')
    <a href='{{ route('participant.create') }}'>Add a new participant</a><br>
    <br>
    or
    <br>
    @foreach($participants as $participant)
        Edit participant: <a href='{{ route('participant.edit', $participant->id) }}'>{{ $participant->first_name }} {{$participant->last_name }}</a> or
        <a href='{{ route('participant.delete', $participant->id) }}'>(DELETE)</a><br>
    @endforeach
@endsection