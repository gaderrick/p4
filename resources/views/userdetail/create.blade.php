@extends('layouts.master')

@section('pagename')
    Create Participant
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('userdetail.store') }}">
                    {{ csrf_field() }}

                    @include('userdetail.userdetailFormInputs')

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Add Participant
                            </button>
                        </div>
                    </div>
                </form>

                @include('modules.error-form')
            </div>
        </div>
    </div>
@endsection