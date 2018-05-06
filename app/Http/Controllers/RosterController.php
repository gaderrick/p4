<?php

namespace App\Http\Controllers;

use App\Participant;
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
            return redirect()->route('roster.create', $id)->with([
                'alert' => 'No rosters found for this organization. You may add it now.',
                'alert_color' => 'green',
                'organization_id' => $id
            ]);
        }

        // Return the list of rosters for the organization
        return view('roster.index')->with([
            'rosters' => $rosters,
            'organization_id' => $id
        ]);
    }

    public function create(Request $request, $id)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('roster.create')->with([
            'roster' => new Roster(),
            'rosterTypesForDropdown' => RosterType::getForDropdown(),
            'organization_id' => $id,
            'alert' => $alert,
            'alert_color' => $alert_color,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'organization_id' => 'required|integer',
            'type_id' => 'required|integer',
            'name' => 'required|string|min:2|max:150',
            'description' => 'string'
        ]);

        // Magic code generator for participants
        $magicCode = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 10; $i++) {
            $rand = mt_rand(0, $max);
            $magicCode .= $characters[$rand];
        }

        # Save the user details to the database
        $roster = new Roster();
        $roster->organization_id = $request->organization_id;
        $roster->type_id = $request->type_id;
        $roster->name = $request->name;
        $roster->description = $request->description;
        $roster->magic_code = $magicCode;

        $roster->save();

//        # Logging code just as proof of concept that this method is being invoked
//        # Log::info('Saved user details for ' . $participant->user_id);

//        # Send the user back to the list of participants page w/ success message
        return redirect(route('roster.index', $request->organization_id))->with([
            'alert' => 'Saved roster details for ' . $roster->name,
            'alert_color' => 'green'
        ]);
    }

    public function edit($id)
    {
        $roster = Roster::find($id);

        # Handle the case where we can't find the given participant
        if (!$roster) {
            return redirect(route('org.index'))->with([
                'alert' => 'No matching roster was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('roster.edit')->with([
            'roster' => $roster,
            'rosterTypesForDropdown' => RosterType::getForDropdown(),
            'organization_id' => $roster->organization_id
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'organization_id' => 'required|integer',
            'type_id' => 'required|integer',
            'name' => 'required|string|min:2|max:150',
            'description' => 'string'
        ]);

        # Fetch the record
        $roster = Roster::find($id);

        # Update the roster details
        // $roster->organization_id = $request->organization_id;
        $roster->type_id = $request->type_id;
        $roster->name = $request->name;
        $roster->description = $request->description;

        $roster->save();

        return redirect(route('roster.edit', $roster->id))->with([
            'alert' => 'Your changes were saved',
            'alert_color' => 'green'
        ]);
    }

    public function delete($id)
    {
        $roster = Roster::find($id);

        # Handle the case where we can't find the given participant
        if (!$roster) {
            return redirect(route('org.index'))->with([
                'alert' => 'No matching roster was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('roster.delete')->with([
            'roster' => $roster,
        ]);
    }

    public function destroy($id)
    {
        $roster = Roster::find($id);

        # Before we delete the roster we have to delete the participants associated with it
        $roster->participants()->detach();

        $roster->delete();

        return redirect(route('roster.index', $roster->organization_id))->with([
            'alert' => 'Roster ' . $roster->name . ' was deleted.',
            'alert_color' => 'green'
        ]);
    }

    // manage a roster associated with an organization
    public function manage()
    {
        $roster = Roster::find(2);
        $participant = Participant::where('id','=',2)->first();

        $roster->participants()->attach($participant->id);
        $roster->save();
    }
}
