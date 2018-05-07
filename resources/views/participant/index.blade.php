@extends('layouts.master')

@section('pagename')
    Manage Participants
@endsection

@section('content')
    <br>
    <div align='center'><h3>Participants</h3></div>
    <div class='table-responsive'>
        <table class='table'>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Sex</th>
                <th>DOB</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Member #</th>
                <th>Magic Code</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($participants as $participant)
                <tr>
                    <td>{{ $participant->id }}</td>
                    <td>{{ $participant->last_name }}, {{ $participant->first_name }}</td>
                    <td>{{ $participant_types[$participant->type_id] }}</td>
                    <td>{{ $participant->sex }}</td>
                    <td>{{ $participant->date_of_birth }}</td>
                    <td>{{ $participant->city }}</td>
                    <td>{{ $states[$participant->state_id] }}</td>
                    <td>{{ $countries[$participant->country_id] }}</td>
                    <td>{{ $participant->membership_number }}</td>
                    <td>{{ $participant->magic_code }}</td>
                    <td>
                        <a href='{{ route('participant.edit', $participant->id) }}' style='text-decoration: none'>
                            <img width='30' src='{{ asset('images/pencil.png') }}' alt='Edit'>
                        </a>
                        <a href='{{ route('participant.delete', $participant->id) }}' style='text-decoration: none'>
                            <img width='30' src='{{ asset('images/trash.png') }}' alt='Trash'>
                        </a>
                        <!--a href='' style='text-decoration: none' -->
                        <img style='opacity: .3' width='28' src='{{ asset('images/email.png') }}' alt='E-mail'>
                        <!-- /a -->
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan='11'>
                    <a href='{{ route('participant.create') }}'>Add a new participant</a><br>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection