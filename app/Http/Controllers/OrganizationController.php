<?php

namespace App\Http\Controllers;

use Auth;
use App\OrganizationType;
use App\Organization;
use App\State;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $current_user = auth()->user()->id;
        $organizations = Organization::where('user_id', '=', $current_user)->orderBy('organization_name')->get();

        $count = $organizations->count();

        if ($count == 0) {
            return redirect()->route('org.create')->with([
                'alert' => 'No organizations are setup for this user. You may set one up below.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('organization.index')->with([
            'organizations' => $organizations
        ]);
    }

    public function create(Request $request)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('organization.create')->with([
            'organizationTypesForDropdown' => OrganizationType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'organization' => new Organization(),
            'alert' => $alert,
            'alert_color' => $alert_color
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'organization_type' => 'required|integer',
            'organization_category' => 'required|integer',
            'organization_name' => 'required|string|min:2|max:150',
            'street_address' => 'string|nullable|max:150',
            'city' => 'string|nullable|max:100',
            'state' => 'string|nullable|max:2',
            'zip_code' => 'string|nullable|max:10',
            'country' => 'string|nullable|max:3',
            'website' => 'string|nullable|max:250',
            'contact_name' => 'string|nullable|min:2|max:200',
            'email' => 'email|nullable|max:255',
            'phone' => 'string|nullable|max:30',
            'membership_number' => 'string|nullable|max:20'
        ]);

        // Magic code generator for user_details
        // todo: Add the magic code to a utilities class; fix in user_details as well
        $magicCode = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 10; $i++) {
            $rand = mt_rand(0, $max);
            $magicCode .= $characters[$rand];
        }

        # Save the user details to the database
        $organization = new Organization();
        $organization->user_id = auth()->user()->id;
        $organization->organization_type = $request->organization_type;
        $organization->organization_category = $request->organization_category;
        $organization->organization_name = $request->organization_name;
        $organization->street_address = $request->street_address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->zip_code = $request->zip_code;
        $organization->country = $request->country;
        $organization->website = $request->website;
        $organization->contact_name = $request->contact_name;
        $organization->email = $request->email;
        $organization->phone = $request->phone;
        $organization->membership_number = $request->membership_number;
        $organization->organization_magic_code = $magicCode;

        $organization->save();

//        # Logging code just as proof of concept that this method is being invoked
//        # Log::info('Saved user details for ' . $user_detail->user_id);

        // Send the user back to the list of organizations page w/ success message
        return redirect(route('org.index'))->with([
            'alert' => 'Organization '.$organization->organization_name.' created.',
            'alert_color' => 'green'
        ]);
    }

    public function edit($id)
    {
        $current_user = auth()->user()->id;
        $organization = Organization::find($id);

        if (!($organization && $organization->user_id == $current_user)) {
            $organization = null;
        }

        # Handle the case where we can't find the given user_detail
        if (!$organization) {
            return redirect(route('home'))->with([
                'alert' => 'No matching organization was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('organization.edit')->with([
            'organizationTypesForDropdown' => OrganizationType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'organization' => $organization
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'organization_type' => 'required|integer',
            'organization_category' => 'required|integer',
            'organization_name' => 'required|string|min:2|max:150',
            'street_address' => 'string|nullable|max:150',
            'city' => 'string|nullable|max:100',
            'state' => 'string|nullable|max:2',
            'zip_code' => 'string|nullable|max:10',
            'country' => 'string|nullable|max:3',
            'website' => 'string|nullable|max:250',
            'contact_name' => 'string|nullable|min:2|max:200',
            'email' => 'email|nullable|max:255',
            'phone' => 'string|nullable|max:30',
            'membership_number' => 'string|nullable|max:20'
        ]);

        $organization = Organization::find($id);

        # Save the user details to the database
        $organization->organization_type = $request->organization_type;
        $organization->organization_category = $request->organization_category;
        $organization->organization_name = $request->organization_name;
        $organization->street_address = $request->street_address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->zip_code = $request->zip_code;
        $organization->country = $request->country;
        $organization->website = $request->website;
        $organization->contact_name = $request->contact_name;
        $organization->email = $request->email;
        $organization->phone = $request->phone;
        $organization->membership_number = $request->membership_number;

        $organization->save();

        return redirect(route('org.edit', $organization->id))->with([
            'alert' => 'Your changes were saved',
            'alert_color' => 'green'
        ]);
    }

    public function delete($id)
    {
        $current_user = auth()->user()->id;
        $organization = Organization::find($id);

        if (!($organization && $organization->user_id == $current_user)) {
            $organization = null;
        }

        # Handle the case where we can't find the given user_detail
        if (!$organization) {
            return redirect(route('home'))->with([
                'alert' => 'No matching organization was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('organization.delete')->with([
            'organization' => $organization,
        ]);
    }

    public function destroy($id)
    {
        $organization = Organization::find($id);

        # Before we delete the organization we may have to clean up the rosters a bit
        # todo: ???
        # $book->tags()->detach();

        # todo: look into how to do soft deletes; maybe add # to organization_id?
        $organization->delete();

        return redirect(route('org.index'))->with([
            'alert' => 'Organization '.$organization->organization_name.' was deleted.',
            'alert_color' => 'red'
        ]);
    }
}
