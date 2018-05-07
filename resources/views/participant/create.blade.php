@extends('layouts.master')

@section('pagename')
    Create Participant
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6 center'>
            <div>
                <form method='POST' action='{{ route('participant.store') }}'>
                    {{ csrf_field() }}

                    <div style='text-align: center'><h3>Create a New Participant</h3></div>
                    @include('participant.participantFormInputs')

                    <div class='form-group'>
                        <div class='col-md-12'>
                            <button type='submit' class='btn btn-primary'>
                                Add Participant
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
@endsection