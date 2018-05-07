@extends('layouts.master')

@section('pagename')
    Delete Participant
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6 center'>
            <div>
                <form method='POST' action='{{ route('participant.destroy', $participant->id) }}'>
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <div style='text-align: center'>
                        <h3>Delete an Existing Participant</h3>
                        Are you sure you want to delete {{ $participant->first_name }} {{ $participant->last_name }}?<br><br>
                        <div class='form-group'>
                            <div class='col-md-12'>
                                <button type='submit' class='btn btn-danger'>
                                    Delete Participant
                                </button>
                                <br>
                                <a href='{{ url()->previous() }}'>Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection