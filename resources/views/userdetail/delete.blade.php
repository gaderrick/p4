@extends('layouts.master')

@section('pagename')
    Delete Participant
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('userdetail.destroy', $user_detail->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <div style="text-align: center">
                        <h3>Delete an Existing Participant</h3>
                        Are you sure you want to delete {{ $user_detail->first_name }} {{ $user_detail->last_name }}?<br><br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <!-- todo: make the following button red -->
                                <button type="submit" class="btn btn-primary">
                                    Delete Participant
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection