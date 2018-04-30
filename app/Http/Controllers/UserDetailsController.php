<?php

namespace App\Http\Controllers;

use Auth;
use App\UserDetail;
use App\UserType;
use App\State;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function index()
    {
        // first thing get current user's id from Auth and only show their user infos
        $current_user = auth()->user()->id;
        $user_details = UserDetail::where('user_id', '=', $current_user)->orderBy('last_name')->get();

        $count = $user_details->count();

        if ($count == 0) {
            return redirect()->route('userdetail.create')->with([
                'alert' => 'No participants are paired with this user. You may create one up below.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('userdetail.index')->with([
            'user_details' => $user_details
        ]);
    }

    public function create(Request $request)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('userdetail.create')->with([
            'userTypesForDropdown' => UserType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'user_detail' => new UserDetail(),
            'alert' => $alert,
            'alert_color' => $alert_color,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_type' => 'required|integer',
            'first_name' => 'required|string|min:2|max:80',
            'middle_name' => 'string|nullable|max:40',
            'last_name' => 'required|string|min:2|max:80',
            'sex' => 'string|nullable|max:1',
            'email' => 'email|nullable|max:255',
            'phone' => 'string|nullable|max:30',
            'cell_phone' => 'string|nullable|max:30',
            'street_address' => 'string|nullable|max:150',
            'city' => 'string|nullable|max:100',
            'state' => 'string|nullable|max:2',
            'zip_code' => 'string|nullable|max:10',
            'country' => 'string|nullable|max:3',
            'date_of_birth' => 'date|date_format:Y-m-d|nullable',
            'user_note' => 'string|nullable|max:50',
            'membership_number' => 'string|nullable|max:20'
        ]);

        // Magic code generator for user_details
        $magicCode = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 10; $i++) {
            $rand = mt_rand(0, $max);
            $magicCode .= $characters[$rand];
        }

        # Save the user details to the database
        $user_detail = new UserDetail();
        $user_detail->user_id = auth()->user()->id;
        $user_detail->user_type = $request->user_type;
        $user_detail->first_name = $request->first_name;
        $user_detail->middle_name = $request->middle_name;
        $user_detail->last_name = $request->last_name;
        $user_detail->sex = $request->sex;
        $user_detail->email = $request->email;
        $user_detail->phone = $request->phone;
        $user_detail->cell_phone = $request->cell_phone;
        $user_detail->street_address = $request->street_address;
        $user_detail->city = $request->city;
        $user_detail->state = $request->state;
        $user_detail->zip_code = $request->zip_code;
        $user_detail->country = $request->country;
        $user_detail->date_of_birth = $request->date_of_birth;
        $user_detail->user_note = $request->user_note;
        $user_detail->membership_number = $request->membership_number;
        $user_detail->user_magic_code = $magicCode;

        $user_detail->save();

//        # Logging code just as proof of concept that this method is being invoked
//        # Log::info('Saved user details for ' . $user_detail->user_id);

//        # Send the user back to the list of participants page w/ success message
        return redirect(route('userdetail.index'))->with([
            'alert' => 'Saved user details for ' . $user_detail->first_name . ' ' . $user_detail->last_name,
            'alert_color' => 'green'
        ]);
    }

    public function edit($id)
    {
        $current_user = auth()->user()->id;
        $user_detail = UserDetail::find($id);

        if (!($user_detail && $user_detail->user_id == $current_user)) {
            $user_detail = null;
        }

        # Handle the case where we can't find the given book
        if (!$user_detail) {
            return redirect(route('home'))->with([
                'alert' => 'No matching participant was found.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('userdetail.edit')->with([
            'userTypesForDropdown' => UserType::getForDropdown(),
            'statesForDropdown' => State::getForDropdown(),
            'user_detail' => $user_detail
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_type' => 'required|integer',
            'first_name' => 'required|string|min:2|max:80',
            'middle_name' => 'string|nullable|max:40',
            'last_name' => 'required|string|min:2|max:80',
            'sex' => 'string|nullable|max:1',
            'email' => 'email|nullable|max:255',
            'phone' => 'string|nullable|max:30',
            'cell_phone' => 'string|nullable|max:30',
            'street_address' => 'string|nullable|max:150',
            'city' => 'string|nullable|max:100',
            'state' => 'string|nullable|max:2',
            'zip_code' => 'string|nullable|max:10',
            'country' => 'string|nullable|max:3',
            'date_of_birth' => 'date|date_format:Y-m-d|nullable',
            'user_note' => 'string|nullable|max:50',
            'membership_number' => 'string|nullable|max:20'
        ]);

        # Fetch the record
        $user_detail = UserDetail::find($id);

        # Update the participant details
        $user_detail->user_type = $request->user_type;
        $user_detail->first_name = $request->first_name;
        $user_detail->middle_name = $request->middle_name;
        $user_detail->last_name = $request->last_name;
        $user_detail->sex = $request->sex;
        $user_detail->email = $request->email;
        $user_detail->phone = $request->phone;
        $user_detail->cell_phone = $request->cell_phone;
        $user_detail->street_address = $request->street_address;
        $user_detail->city = $request->city;
        $user_detail->state = $request->state;
        $user_detail->zip_code = $request->zip_code;
        $user_detail->country = $request->country;
        $user_detail->date_of_birth = $request->date_of_birth;
        $user_detail->user_note = $request->user_note;
        $user_detail->membership_number = $request->membership_number;

        $user_detail->save();

        return redirect(route('userdetail.edit', $user_detail->id))->with([
            'alert' => 'Your changes were saved',
            'alert_color' => 'green'
        ]);
    }

    public function delete($id)
    {
    }

    public function destroy($id)
    {
    }
}
