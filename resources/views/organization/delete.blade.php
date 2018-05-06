@extends('layouts.master')

@section('pagename')
    Delete Organization
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('org.destroy', $organization->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <div style="text-align: center">
                        <h3>Delete an Existing Organization</h3>
                        Are you sure you want to delete {{ $organization->name }}?<br><br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <!-- todo: make the following button red -->
                                <button type="submit" class="btn btn-danger">
                                    Delete Organization
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