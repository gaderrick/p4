<?php

namespace App\Http\Controllers;

use Auth;
use App\Userinfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function list()
    {
        // first thing get current user's id from Auth and only show their user infos
        $currentUserID=Auth::user()->id;
        dump($currentUserID);
    }

    public function show($id)
    {
        $user_infos = Userinfo::orderBy('id')->get();
        dump($id);
        dump($user_infos);
//        $books = Book::orderBy('title')->get();
//        $newBooks = $books->sortByDesc('created_at')->take(3);
//        $alert = $request->session()->get('alert');
//
//        return view('books.index')->with([
//            'books' => $books,
//            'newBooks' => $newBooks,
//            'alert' => $alert
//        ]);

    }

    public function new()
    {
    }

    public function edit($id)
    {
    }

    public function store(Request $request)
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
}
