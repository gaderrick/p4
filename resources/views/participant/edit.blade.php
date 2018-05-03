@extends('layouts.master')

@section('pagename')
    Edit Participant
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('participant.update', $participant->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div style="text-align: center"><h3>Update an Existing Participant</h3></div>
                    @include('participant.participantFormInputs')

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Update Participant
                            </button>
                        </div>
                    </div>
                </form>

                @include('modules.error-form')
            </div>
        </div>
    </div>
@endsection