<?php

namespace App\Http\Controllers;

use App\RosterType;
use Auth;
use App\Roster;
use App\Organization;
use Illuminate\Http\Request;

class RosterController extends Controller
{
    // list all rosters for an organization ($id)
    public function index($id){
        // first thing get current user's id from Auth and only show their user infos
        $current_user = auth()->user()->id;

        // This query verifies that the current_user is the owner of the organization
        $organization = Organization::where('id', '=', $id)
            ->where('user_id', '=', $current_user)
            ->get();

        if ($organization->count() == 0) {
            return redirect()->route('org.index')->with([
                'alert' => 'You do not have permissions for that organization.',
                'alert_color' => 'red'
            ]);
        }

        // get all of the rosters for the organization $id
        $rosters = Roster::where('organization_id', '=', $id)->get();

        if ($rosters->count() == 0) {
            return redirect()->route('roster.create')->with([
                'alert' => 'No rosters found for this organization. You may add it now.',
                'alert_color' => 'green',
                'organization_id' => $id
            ]);
        }

        // Return the list of rosters for the organization
        return view('roster.index')->with([
            'rosters' => $rosters,
            'organization' => $organization
        ]);
    }

    public function create(Request $request)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('roster.create')->with([
            'roster' => new Roster(),
            'rosterTypesForDropdown' => RosterType::getForDropdown(),
            'alert' => $alert,
            'alert_color' => $alert_color,
        ]);
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
    }

    public function destroy($id)
    {
    }

    // manage a roster associated with an organization
    // $id here is the roster_id
    public function manage($id)
    {
        // todo: this needs to be reworked; may combine with edit

    }
}
