<?php

namespace App\Http\Controllers;

use Auth;
use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
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
            'middle_name' => 'string|max:40',
            'last_name' => 'required|string|min:2|max:80',

//            'title' => 'required',
//            'author' => 'required',
//            'published_year' => 'required|digits:4|numeric',
//            'cover_url' => 'required|url',
//            'purchase_url' => 'required|url',
        ]);

        $table->unsignedInteger('user_id');

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
        // first thing get current user's id from Auth and only show their user infos
        $current_user = Auth::user()->pluck('id');
        $userinfos = UserDetail::where('user_id', '=', $current_user)->orderBy('last_name')->get();

        $count = $userinfos->count();

        if ($count == 0) {
            return redirect()->route('userdetail.create')->with([
                'alert' => 'No participants are paired with this user. You may create one up below.',
                'alert_color' => 'yellow'
            ]);
        }

        return view('userdetail.index')->with([
            'userinfos' => $userinfos
        ]);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
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
