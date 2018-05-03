<?php

namespace App\Http\Controllers;

use Auth;
use App\Participant;
use App\ParticipantType;
use App\State;
use App\Country;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function index()
    {
        // first thing get current user's id from Auth and only show their user infos
        $current_user = auth()->user()->id;
        $participants = Participant::where('user_id', '=', $current_user)->orderBy('last_name')->get();

        $count = $participants->count();

        if ($count == 0) {
            return redirect()->route('participant.create')->with([
                'alert' => 'No participants are paired with this user. You may create one up below.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('participant.index')->with([
            'participants' => $participants
        ]);
    }

    public function create(Request $request)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('participant.create')->with([
            'userTypesForDropdown' => ParticipantType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'countriesForDropdown' => Country::getForDropdown(),
            'participant' => new Participant(),
            'alert' => $alert,
            'alert_color' => $alert_color,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'participant_type_id' => 'required|integer',
        'first_name' => 'required|string|min:2|max:80',
        'middle_name' => 'string|nullable|max:40',
        'last_name' => 'required|string|min:2|max:80',
        'sex' => 'string|nullable|max:1',
        'email' => 'email|nullable|max:255',
        'phone' => 'string|nullable|max:30',
        'cell_phone' => 'string|nullable|max:30',
        'street_address' => 'string|nullable|max:150',
        'city' => 'string|nullable|max:100',
        'state_id' => 'integer|nullable',
        'zip_code' => 'string|nullable|max:10',
        'country_id' => 'integer|nullable',
        'date_of_birth' => 'date|date_format:Y-m-d|nullable',
        'note' => 'string|nullable|max:50',
        'membership_number' => 'string|nullable|max:20'
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
        $participant = new Participant();
        $participant->user_id = auth()->user()->id;
        $participant->participant_type_id = $request->participant_type_id;
        $participant->first_name = $request->first_name;
        $participant->middle_name = $request->middle_name;
        $participant->last_name = $request->last_name;
        $participant->sex = $request->sex;
        $participant->email = $request->email;
        $participant->phone = $request->phone;
        $participant->cell_phone = $request->cell_phone;
        $participant->street_address = $request->street_address;
        $participant->city = $request->city;
        $participant->state_id = $request->state_id;
        $participant->zip_code = $request->zip_code;
        $participant->country_id = $request->country_id;
        $participant->date_of_birth = $request->date_of_birth;
        $participant->note = $request->note;
        $participant->membership_number = $request->membership_number;
        $participant->magic_code = $magicCode;

        $participant->save();

//        # Logging code just as proof of concept that this method is being invoked
//        # Log::info('Saved user details for ' . $participant->user_id);

//        # Send the user back to the list of participants page w/ success message
        return redirect(route('participant.index'))->with([
            'alert' => 'Saved user details for ' . $participant->first_name . ' ' . $participant->last_name,
            'alert_color' => 'green'
        ]);
    }

    public function edit($id)
    {
        $current_user = auth()->user()->id;
        $participant = Participant::find($id);

        if (!($participant && $participant->user_id == $current_user)) {
            $participant = null;
        }

        # Handle the case where we can't find the given participant
        if (!$participant) {
            return redirect(route('home'))->with([
                'alert' => 'No matching participant was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('participant.edit')->with([
            'userTypesForDropdown' => ParticipantType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'countriesForDropdown' => Country::getForDropdown(),
            'participant' => $participant
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'participant_type_id' => 'required|integer',
            'first_name' => 'required|string|min:2|max:80',
            'middle_name' => 'string|nullable|max:40',
            'last_name' => 'required|string|min:2|max:80',
            'sex' => 'string|nullable|max:1',
            'email' => 'email|nullable|max:255',
            'phone' => 'string|nullable|max:30',
            'cell_phone' => 'string|nullable|max:30',
            'street_address' => 'string|nullable|max:150',
            'city' => 'string|nullable|max:100',
            'state_id' => 'integer|nullable',
            'zip_code' => 'string|nullable|max:10',
            'country_id' => 'integer|nullable',
            'date_of_birth' => 'date|date_format:Y-m-d|nullable',
            'note' => 'string|nullable|max:50',
            'membership_number' => 'string|nullable|max:20'
        ]);

        # Fetch the record
        $participant = Participant::find($id);

        # Update the participant details
        $participant->participant_type_id = $request->participant_type_id;
        $participant->first_name = $request->first_name;
        $participant->middle_name = $request->middle_name;
        $participant->last_name = $request->last_name;
        $participant->sex = $request->sex;
        $participant->email = $request->email;
        $participant->phone = $request->phone;
        $participant->cell_phone = $request->cell_phone;
        $participant->street_address = $request->street_address;
        $participant->city = $request->city;
        $participant->state_id = $request->state_id;
        $participant->zip_code = $request->zip_code;
        $participant->country_id = $request->country_id;
        $participant->date_of_birth = $request->date_of_birth;
        $participant->note = $request->note;
        $participant->membership_number = $request->membership_number;

        $participant->save();

        return redirect(route('participant.edit', $participant->id))->with([
            'alert' => 'Your changes were saved',
            'alert_color' => 'green'
        ]);
    }

    public function delete($id)
    {
        $current_user = auth()->user()->id;
        $participant = Participant::find($id);

        if (!($participant && $participant->user_id == $current_user)) {
            $participant = null;
        }

        # Handle the case where we can't find the given participant
        if (!$participant) {
            return redirect(route('home'))->with([
                'alert' => 'No matching participant was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('participant.delete')->with([
            'participant' => $participant,
        ]);
    }

    public function destroy($id)
    {
        $participant = Participant::find($id);

        # Before we delete the book we have to delete any tag associations
        # todo: detach the roster_participant info
        # $book->tags()->detach();

        # todo: look into how to do soft deletes; maybe add # to user_id?
        $participant->delete();

        return redirect(route('participant.index'))->with([
            'alert' => 'Participant '.$participant->first_name.' '.$participant->last_name.' was deleted.',
            'alert_color' => 'red'
        ]);
    }
}
