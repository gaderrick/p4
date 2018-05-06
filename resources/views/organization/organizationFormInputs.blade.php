<div style="text-align: center">* Required fields</div>
<div class="form-group">
    <label for='type_id' class='col-md-12 control-label'>* Organization Type</label>
    <div class="col-md-12">
        <select id='type_id' name='type_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($organizationTypesForDropdown as $id => $organizationDescription)
                <option value='{{ $id }}' {{ (old('type_id',$organization->type_id) == $id) ? 'selected' : '' }}>{{ $organizationDescription }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'type_id'])
    </div>
</div>
<div class="form-group">
    <label for='name' class="col-md-12 control-label">* Organization Name</label>
    <div class="col-md-12">
        <input id='name' type='text' class="form-control" name='name' value='{{ old('name', $organization->name) }}'>
        @include('modules.error-field', ['field' => 'name'])
    </div>
</div>
<div class="form-group">
    <label for='street_address' class="col-md-12 control-label">Street Address</label>
    <div class="col-md-12">
        <input id='street_address' type='text' class="form-control" name='street_address' value='{{ old('street_address', $organization->street_address) }}'>
        @include('modules.error-field', ['field' => 'street_address'])
    </div>
</div>
<div class="form-group">
    <label for='city' class="col-md-12 control-label">City</label>
    <div class="col-md-12">
        <input id='city' type='text' class="form-control" name='city' value='{{ old('city', $organization->city) }}'>
        @include('modules.error-field', ['field' => 'city'])
    </div>
</div>
<div class="form-group">
    <label for='state_id' class="col-md-12 control-label">* State</label>
    <div class="col-md-12">
        <select id='state_id' name='state_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($statesForDropdown as $id => $stateName)
                <option value='{{ $id }}' {{ (old('state_id',$organization->state_id) == $id) ? 'selected' : '' }}>{{ $stateName }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'state_id'])
    </div>
</div>
<div class="form-group">
    <label for='zip_code' class="col-md-12 control-label">Zip Code</label>
    <div class="col-md-12">
        <input id='zip_code' type='text' class="form-control" name='zip_code' value='{{ old('zip_code', $organization->zip_code) }}'>
        @include('modules.error-field', ['field' => 'zip_code'])
    </div>
</div>
<div class="form-group">
    <label for='country_id' class="col-md-12 control-label">* Country</label>
    <div class="col-md-12">
        <select id='country_id' name='country_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($countriesForDropdown as $id => $countryName)
                <option value='{{ $id }}' {{ (old('country_id',$organization->country_id) == $id) ? 'selected' : '' }}>{{ $countryName }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'country_id'])
    </div>
</div>
<div class="form-group">
    <label for='website' class="col-md-12 control-label">Website</label>
    <div class="col-md-12">
        <input id='website' type='text' class="form-control" name='website' value='{{ old('website', $organization->website) }}'>
        @include('modules.error-field', ['field' => 'website'])
    </div>
</div>
<div class="form-group">
    <label for='contact_name' class="col-md-12 control-label">Contact Name</label>
    <div class="col-md-12">
        <input id='contact_name' type='text' class="form-control" name='contact_name' value='{{ old('contact_name', $organization->contact_name) }}'>
        @include('modules.error-field', ['field' => 'contact_name'])
    </div>
</div>
<div class="form-group">
    <label for='email' class="col-md-12 control-label">Email</label>
    <div class="col-md-12">
        <input id='email' type='text' class="form-control" name='email' value='{{ old('email', $organization->email) }}'>
        @include('modules.error-field', ['field' => 'email'])
    </div>
</div>
<div class="form-group">
    <label for='phone' class="col-md-12 control-label">Phone</label>
    <div class="col-md-12">
        <input id='phone' type='text' class="form-control" name='phone' value='{{ old('phone', $organization->phone) }}'>
        @include('modules.error-field', ['field' => 'phone'])
    </div>
</div>
<div class="form-group">
    <label for='membership_number' class="col-md-12 control-label">Membership Number</label>
    <div class="col-md-12">
        <input id='membership_number' type='text' class="form-control" name='membership_number' value='{{ old('membership_number', $organization->membership_number) }}'>
        @include('modules.error-field', ['field' => 'membership_number'])
    </div>
</div>