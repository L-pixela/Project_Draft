<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('Admin.book.index',['books' => $books]);
    }

    public function create(){
        return view('Admin.book.create');
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'publishDate'=>'required|date'
        ]);


        $newBook = Book::create($data);

        return redirect(route('book.index'));
    }

    public function edit(Book $book){
        return view('Admin.book.edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request){
        $data = $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'publishDate'=>'required|date'
        ]);

        $book->update($data);

        return redirect(route('book.index'))->with('msg','Book is Updated Successfully!');
    }

    public function delete(Book $book){
        $book->delete();

        return redirect(route('book.index'))->with('msg','Book is Deleted Successfully!');
    }

}
