@extends('layouts.master')

@section('pagename')
    Edit Roster Details
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6 center'>
            <div>
                <form method='POST' action='{{ route('roster.update', $roster->id) }}'>
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div style='text-align: center'><h3>Update an Existing Roster</h3></div>
                    @include('roster.rosterFormInputs')

                    <div class='form-group'>
                        <div class='col-md-12'>
                            <button type='submit' class='btn btn-primary'>
                                Update Roster
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