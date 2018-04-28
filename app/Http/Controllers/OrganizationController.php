<?php

namespace App\Http\Controllers;

use Auth;
use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function create(Request $request)
    {
        $alert = $request->session()->get('alert');
        $alert_color = $request->session()->get('alert_color');

        return view('organization.create')->with([
           'alert' => $alert,
           'alert_color' => $alert_color
        ]);
    }

    public function store()
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'author' => 'required',
//            'published_year' => 'required|digits:4|numeric',
//            'cover_url' => 'required|url',
//            'purchase_url' => 'required|url',
//        ]);
//
//        $title = $request->input('title');
//
//        # Save the book to the database
//        $book = new Book();
//        $book->title = $request->title;
//        $book->author = $request->author;
//        $book->published_year = $request->published_year;
//        $book->cover_url = $request->cover_url;
//        $book->purchase_url = $request->purchase_url;
//        $book->save();
//
//        # Logging code just as proof of concept that this method is being invoked
//        # Log::info('Add the book ' . $book->title);
//
//        # Send the user back to the page to add a book; include the title as part of the redirect
//        # so we can display a confirmation message on that page
//        return redirect('/books/create')->with([
//            'alert' => 'Your book ' . $title . ' was created.'
//        ]);
    }

    public function index()
    {
        $currentUserID = Auth::user()->pluck('id');
        $organizations = Organization::where('user_id', '=', $currentUserID)->orderBy('organization_name')->get();

        $cnt=$organizations->count();
        if ($cnt==0) {
            return redirect()->route('org.create')->with([
                'alert' => 'No organizations are setup for this user. You may set one up below.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('organization.index')->with([
            'organizations' => $organizations
        ]);
    }

    public function edit($id)
    {
    }

    public function update($id)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'author' => 'required',
//            'published_year' => 'required|digits:4|numeric',
//            'cover_url' => 'required|url',
//            'purchase_url' => 'required|url',
//        ]);
//
//        $book = Book::find($id);
//
//        $book->title = $request->title;
//        $book->author = $request->author;
//        $book->published_year = $request->published_year;
//        $book->cover_url = $request->cover_url;
//        $book->purchase_url = $request->purchase_url;
//        $book->save();
//
//        return redirect('/books/' . $id . '/edit')->with([
//            'alert' => 'Your changes were saved'
//        ]);
    }

    public function delete($id)
    {
    }

    public function destroy($id)
    {
    }
}
