@extends('layouts.master')

@section('pagename')
    Manage Rosters
@endsection

@section('content')
    <br>
    <div style='text-align: center'><h3>Rosters for {{ $organization->name }}</h3></div>
    <div class='table-responsive'>
        <table class='table'>
            <thead>
            <tr>
                <th>#</th>
                <th>Roster Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Magic Code</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rosters as $roster)
                <tr>
                    <td>{{ $roster->id }}</td>
                    <td>{{ $roster->name }}</td>
                    <td>{{ $roster_types[$roster->type_id] }}</td>
                    <td>{{ $roster->description }}</td>
                    <td>{{ $roster->magic_code }}</td>
                    <td>
                        <a href='{{ route('roster.edit', $roster->id) }}'>
                            <img width='30' src='{{ asset('images/pencil.png') }}' alt='Edit'>
                        </a>
                        <a href='{{ route('roster.delete', $roster->id) }}'>
                            <img width='30' src='{{ asset('images/trash.png') }}' alt='Trash'>
                        </a>
                        <a href='{{ route('roster.addParticipant', $roster->id) }}'>
                            <img width='30' src='{{ asset('images/add_user.png') }}' alt='Add Participants'>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan='9'>
                    <a href='{{ route('roster.create', $organization->id) }}'>Add a new roster</a>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection