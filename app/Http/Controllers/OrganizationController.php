<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function list($owner_user_id)
    {
        $organizations=Organization::orderBy('owner_user_id');
        dump($owner_user_id);
        dump($organizations);
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
}
