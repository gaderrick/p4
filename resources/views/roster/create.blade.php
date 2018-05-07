@extends('layouts.master')

@section('pagename')
    Create Roster
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6 center'>
            <div>
                <form method='POST' action='{{ route('roster.store') }}'>
                    {{ csrf_field() }}

                    <div style='text-align: center'><h3>Create a New Roster</h3></div>
                    @include('roster.rosterFormInputs')

                    <div class='form-group'>
                        <div class='col-md-12'>
                            <button type='submit' class='btn btn-primary'>
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
@endsection