<?php

namespace App\Http\Controllers;

use Auth;
use App\UserDetail;
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
            'alert' => $alert,
            'alert_color' => $alert_color,
            'user_detail' => new UserDetail(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_type' => 'required|integer',
            'first_name' => 'required|string|min:2|max:80',
            'middle_name' => 'string|nullable|max:40',
            'last_name' => 'required|string|min:2|max:80',
        ]);

        # Save the user details to the database
        $user_detail = new UserDetail();
        $user_detail->user_id = auth()->user()->id;
        $user_detail->user_type = $request->user_type;
        $user_detail->first_name = $request->first_name;
        $user_detail->middle_name = $request->middle_name;
        $user_detail->last_name = $request->last_name;

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
        ]);

        # Fetch the record
        $user_detail = UserDetail::find($id);

        # Update the participant details
        $user_detail->user_type = $request->user_type;
        $user_detail->first_name = $request->first_name;
        $user_detail->middle_name = $request->middle_name;
        $user_detail->last_name = $request->last_name;

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
