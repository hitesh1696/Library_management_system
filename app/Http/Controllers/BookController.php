<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create(Request $request)
    {
        return view('books.add');
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());  
        return redirect()->route('book')->with('message', 'Book Added Successfully');
    }

    public function show(Book $id)
    {
        $book =  Book::find($id->id);
        return view('books.show',['book' => $book]);
    }
    
    public function edit(Book $book)
    {   
        $book = Book::find($book)->first();
        return view('books.edit',['book' => $book]);
    }

    public function update(StoreBookRequest $request, Book $book)
    {
        $id = $book->id;
        $books = Book::where('id',$id)->first()->update($request->all());
        return redirect()->route('book')->with('message', 'Book Information Updated Successfully');
    }
    
    public function destroy(Book $book)
    {
         return Book::destroy($book);
    }
}