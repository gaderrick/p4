@extends('layouts.master')

@section('pagename')
    Add Participants to Roster
@endsection

@section('content')
    <br>
    <div align="center"><h3>Add Participants to Roster<br>"{{ $roster->name }}"</h3></div>

    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('roster.saveParticipant') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for='magic_code' class="col-md-12 control-label">* Participant Magic Code</label>
                        <div class="col-md-12">
                            <input id='name' type='text' class="form-control" name='magic_code'
                                   value='{{ old('magic_code') }}'>
                            @include('modules.error-field', ['field' => 'magic_code'])
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="roster_id" name="roster_id" type="hidden"
                                   value="{{ old('roster_id',$roster->id) }}">
                            <button type="submit" class="btn btn-primary">
                                Add Roster
                            </button>
                            <br>
                            <a href='{{ url()->previous() }}'>Cancel</a>
                        </div>
                    </div>
                </form>

                @include('modules.error-form')
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
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
                        <!--a href=''-->
                            <img style="opacity: .3" width="28" src="{{ asset('images/email.png') }}" alt="E-mail">
                        <!-- /a -->
                        <a href='{{ route('roster.removeParticipant', [$roster->id, $participant->id]) }}'>
                            <img width="30" src="{{ asset('images/trash.png') }}" alt="Trash">
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection