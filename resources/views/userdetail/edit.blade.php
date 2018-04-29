@extends('layouts.master')

@section('pagename')
    Edit Participant
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('userdetail.update', $user_detail->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    @include('userdetail.userdetailFormInputs')

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