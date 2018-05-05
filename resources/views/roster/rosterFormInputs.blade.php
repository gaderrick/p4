<div style="text-align: center">* Required fields</div>
<div class="form-group">
    <label for='type_id' class="col-md-12 control-label">* Roster Type</label>
    <div class="col-md-12">
        <select id='type_id' name='type_id' class="form-control">
            <option value=''>Choose one...</option>
            @foreach($rosterTypesForDropdown as $id => $rosterTypeDescription)
                <option value='{{ $id }}' {{ (old('type_id',$roster->type_id) == $id) ? 'selected' : '' }}>{{ $rosterTypeDescription }}</option>
            @endforeach
        </select>
        @include('modules.error-field', ['field' => 'type_id'])
    </div>
</div>

<div class="form-group">
    <label for='name' class="col-md-12 control-label">* Organization Name</label>
    <div class="col-md-12">
        <input id='name' type='text' class="form-control" name='name' value='{{ old('name', $participant->name) }}'>
        @include('modules.error-field', ['field' => 'name'])
    </div>
</div>
<div class="form-group">
    <label for='description' class="col-md-12 control-label">Description</label>
    <div class="col-md-12">
        <input id='description' type='text' class="form-control" name='description' value='{{ old('description', $participant->description) }}'>
        @include('modules.error-field', ['field' => 'description'])
    </div>
</div>