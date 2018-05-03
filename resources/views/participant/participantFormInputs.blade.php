<div style="text-align: center">* Required fields</div>
<div class="form-group">
    <label for='participant_type_id' class="col-md-12 control-label">* User Type</label>
    <div class="col-md-12">
        <select id='participant_type_id' name='participant_type_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($userTypesForDropdown as $id => $userTypeDescription)
                <option value='{{ $id }}' {{ (old('participant_type_id',$participant->participant_type_id) == $id) ? 'selected' : '' }}>{{ $userTypeDescription }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'type'])
    </div>
</div>

<div class="form-group">
    <label for='first_name' class="col-md-12 control-label">* First Name</label>
    <div class="col-md-12">
        <input id='first_name' type='text' class="form-control" name='first_name' value='{{ old('first_name', $participant->first_name) }}'>
        @include('modules.error-field', ['field' => 'first_name'])
    </div>
</div>
<div class="form-group">
    <label for='middle_name' class="col-md-12 control-label">Middle Name</label>
    <div class="col-md-12">
        <input id='middle_name' type='text' class="form-control" name='middle_name' value='{{ old('middle_name', $participant->middle_name) }}'>
        @include('modules.error-field', ['field' => 'middle_name'])
    </div>
</div>
<div class="form-group">
    <label for='last_name' class="col-md-12 control-label">* Last Name</label>
    <div class="col-md-12">
        <input id='last_name' type='text' class="form-control" name='last_name' value='{{ old('last_name', $participant->last_name) }}'>
        @include('modules.error-field', ['field' => 'last_name'])
    </div>
</div>
<div class="form-group">
    <label for='sex' class="col-md-12 control-label">Sex</label>
    <div class="col-md-12">
        <select id='sex' name='sex' class="form-control">
            <option value=''>Choose one...</option>
            <option value='F' {{ (old('sex',$participant->sex) == 'F') ? 'selected' : '' }}>Female</option>
            <option value='M' {{ (old('sex',$participant->sex) == 'M') ? 'selected' : '' }}>Male</option>
        </select>
        @include('modules.error-field', ['field' => 'sex'])
    </div>
</div>
<div class="form-group">
    <label for='email' class="col-md-12 control-label">Email</label>
    <div class="col-md-12">
        <input id='email' type='text' class="form-control" name='email' value='{{ old('email', $participant->email) }}'>
        @include('modules.error-field', ['field' => 'email'])
    </div>
</div>
<div class="form-group">
    <label for='phone' class="col-md-12 control-label">Phone</label>
    <div class="col-md-12">
        <input id='phone' type='text' class="form-control" name='phone' value='{{ old('phone', $participant->phone) }}'>
        @include('modules.error-field', ['field' => 'phone'])
    </div>
</div>
<div class="form-group">
    <label for='cell_phone' class="col-md-12 control-label">Cell Phone</label>
    <div class="col-md-12">
        <input id="cell_phone" type='text' class="form-control" name="cell_phone" value='{{ old('cell_phone', $participant->cell_phone) }}'>
        @include('modules.error-field', ['field' => 'cell_phone'])
    </div>
</div>
<div class="form-group">
    <label for='street_address' class="col-md-12 control-label">Street Address</label>
    <div class="col-md-12">
        <input id='street_address' type='text' class="form-control" name='street_address' value='{{ old('street_address', $participant->street_address) }}'>
        @include('modules.error-field', ['field' => 'street_address'])
    </div>
</div>
<div class="form-group">
    <label for='city' class="col-md-12 control-label">City</label>
    <div class="col-md-12">
        <input id='city' type='text' class="form-control" name='city' value='{{ old('city', $participant->city) }}'>
        @include('modules.error-field', ['field' => 'city'])
    </div>
</div>

<div class="form-group">
    <label for='state_id' class="col-md-12 control-label">State</label>
    <div class="col-md-12">
        <select id='state_id' name='state_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($statesForDropdown as $id => $stateName)
                <option value='{{ $id }}' {{ (old('state_id',$participant->state_id) == $id) ? 'selected' : '' }}>{{ $stateName }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'state_id'])
    </div>
</div>
<div class="form-group">
    <label for='zip_code' class="col-md-12 control-label">Zip Code</label>
    <div class="col-md-12">
        <input id='zip_code' type='text' class="form-control" name='zip_code' value='{{ old('zip_code', $participant->zip_code) }}'>
        @include('modules.error-field', ['field' => 'zip_code'])
    </div>
</div>
<div class="form-group">
    <label for='country_id' class="col-md-12 control-label">Country</label>
    <div class="col-md-12">
        <select id='country_id' name='country_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($countriesForDropdown as $id => $countryName)
                <option value='{{ $id }}' {{ (old('country',$participant->country_id) == $id) ? 'selected' : '' }}>{{ $countryName }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'country_id'])
    </div>
</div>
<div class="form-group">
    <label for='date_of_birth' class="col-md-12 control-label">Date of Birth</label>
    <div class="col-md-12">
        <input id='date_of_birth' type='text' class="form-control" name='date_of_birth' value='{{ old('date_of_birth', $participant->date_of_birth) }}'>
        @include('modules.error-field', ['field' => 'date_of_birth'])
    </div>
</div>
<div class="form-group">
    <label for='note' class="col-md-12 control-label">Participant Note</label>
    <div class="col-md-12">
        <input id='note' type='text' class="form-control" name='note' value='{{ old('note', $participant->note) }}'>
        @include('modules.error-field', ['field' => 'note'])
    </div>
</div>
<div class="form-group">
    <label for='membership_number' class="col-md-12 control-label">Membership Number</label>
    <div class="col-md-12">
        <input id='membership_number' type='text' class="form-control" name='membership_number' value='{{ old('membership_number', $participant->membership_number) }}'>
        @include('modules.error-field', ['field' => 'membership_number'])
    </div>
</div>