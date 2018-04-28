@extends('layouts.master')

@section('pagename')
    Create Participant
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div style="text-align: center">* Required fields</div>
            <div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for='user_type' class="col-md-12 control-label">* User Type</label>
                        <div class="col-md-12">
                            <input id='user_type' type='text' class="form-control" name='user_type' value='{{ old('user_type', $user_detail->user_type) }}'>
                            @include('modules.error-field', ['field' => 'user_type'])
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='first_name' class="col-md-12 control-label">* First Name</label>
                        <div class="col-md-12">
                            <input id='first_name' type='text' class="form-control" name='first_name' value='{{ old('first_name', $user_detail->first_name) }}'>
                            @include('modules.error-field', ['field' => 'first_name'])
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='middle_name' class="col-md-12 control-label">Middle Name</label>
                        <div class="col-md-12">
                            <input id='middle_name' type='text' class="form-control" name='middle_name' value='{{ old('middle_name', $user_detail->middle_name) }}'>
                            @include('modules.error-field', ['field' => 'middle_name'])
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='last_name' class="col-md-12 control-label">* Last Name</label>
                        <div class="col-md-12">
                            <input id='last_name' type='text' class="form-control" name='last_name' value='{{ old('last_name', $user_detail->last_name) }}'>
                            @include('modules.error-field', ['field' => 'last_name'])
                        </div>
                    </div>


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