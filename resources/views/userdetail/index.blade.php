@extends('layouts.master')

@section('pagename')
    List of Participants
@endsection

@section('content')
    <a href='{{ route('userdetail.create') }}'>Add a new participant</a><br>
    <br>
    or
    <br>
    @foreach($user_details as $user_detail)
        Edit participant: <a href='{{ route('userdetail.edit', $user_detail->id) }}'>{{ $user_detail->first_name }} {{$user_detail->last_name }}</a> or
        <a href='{{ route('userdetail.delete', $user_detail->id) }}'>(DELETE)</a><br>
    @endforeach
@endsection