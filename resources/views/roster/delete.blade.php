@extends('layouts.master')

@section('pagename')
    Delete Roster
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('roster.destroy', $roster->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <div style="text-align: center">
                        <h3>Delete an Existing Roster</h3>
                        Are you sure you want to delete {{ $roster->name }}?<br><br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <!-- todo: make the following button red -->
                                <button type="submit" class="btn btn-primary">
                                    Delete Roster
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection