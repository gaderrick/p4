<?php

namespace App\Http\Controllers;

use Auth;
use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function create()
    {
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
        $currentUserID = Auth::user()->id;
        $organizations = Organization::where('owner_user_id', '=', $currentUserID)->orderBy('organization_name')->get();

//      $alert = $request->session()->get('alert');
//      The following line needs to go below in the return:

        return view('organization.list')->with([
            'organizations' => $organizations
            // 'alert' => $alert
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
