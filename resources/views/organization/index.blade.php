@extends('layouts.master')

@section('pagename')
    Manage Organizations
@endsection

@section('content')
    <br>
    <div style='text-align: center'><h3>Organizations</h3></div>
    <div class='table-responsive'>
        <table class='table'>
            <thead>
            <tr>
                <th>#</th>
                <th>Organization</th>
                <th>Type</th>
                <th>City</th>
                <th>State</th>
                <th>Membership Number</th>
                <th>Magic Code</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($organizations as $organization)
                <tr>
                    <td>{{ $organization->id }}</td>
                    <td>{{ $organization->name }}</td>
                    <td>{{ $org_types[$organization->type_id] }}</td>
                    <td>{{ $organization->city }}</td>
                    <td>{{ $states[$organization->state_id] }}</td>
                    <td>{{ $organization->membership_number }}</td>
                    <td>{{ $organization->magic_code }}</td>
                    <td>
                        <a href='{{ route('roster.index', $organization->id) }}' style='text-decoration: none'>
                            <img width='30' src='{{ asset('images/roster.png') }}' alt='Rosters'>
                        </a>
                        <a href='{{ route('org.edit', $organization->id) }}' style='text-decoration: none'>
                            <img width='30' src='{{ asset('images/pencil.png') }}' alt='Edit'>
                        </a>
                        <a href='{{ route('org.delete', $organization->id) }}' style='text-decoration: none'>
                            <img width='30' src='{{ asset('images/trash.png') }}' alt='Trash'>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan='8'>
                    <a href='{{ route('org.create') }}'>Add a new organization</a>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection