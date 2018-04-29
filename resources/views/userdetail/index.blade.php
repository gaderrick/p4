@extends('layouts.master')

@section('pagename')
    List of Participants
@endsection

@section('content')
    @foreach($user_details as $user_detail)
        Edit participant: <a href='{{ route('userdetail.edit', $user_detail->id) }}'>{{ $user_detail->first_name }} {{$user_detail->last_name }}</a><br>
    @endforeach
    <br>
    <div>
        <a href='{{ route('userdetail.create') }}'>Or add a new participant</a>
    </div>
@endsection