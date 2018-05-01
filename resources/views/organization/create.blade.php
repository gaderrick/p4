@extends('layouts.master')

@section('pagename')
    Create Organization
@endsection

@section('content')
    <div class="container">
        <div class="col-md-6 center">
            <div>
                <form method="POST" action="{{ route('org.store') }}">
                    {{ csrf_field() }}

                    <div style="text-align: center"><h3>Create a New Organization</h3></div>
                    @include('organization.organizationFormInputs')

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Add Organization
                            </button>
                        </div>
                    </div>
                </form>

                @include('modules.error-form')
            </div>
        </div>
    </div>
@endsection