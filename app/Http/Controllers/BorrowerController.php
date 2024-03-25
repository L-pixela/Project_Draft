<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrower;

class BorrowerController extends Controller
{
    public function index(){
        $borrowers = Borrower::with('books')->get();
        $books = Book::with('borrowers')->get();
        return view('Admin.user.index',compact('borrowers','books'));
    }

    public function create(){
        $book = Book::all();
        return view('Admin.user.create',['book'=>$book]);
    }

    public function store(Request $request){

        $data = $request->validate([

            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'contact'=>'required',
            'book_id'=>'required',
            'return_date'=>'required|date'

        ]);

        $newBorrower = Borrower::create($data);
        
        return redirect(route('borrower.index'));
    }

    public function edit(Borrower $borrower){
        $book = Book::all();
        return view('Admin.user.edit',['borrower' => $borrower,'book'=> $book]);
    }

    public function update(Borrower $borrower, Request $request){
        $data = $request->validate([

            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'contact'=>'required',
            'book_id'=>'required',
            'return_date'=>'required|date'

        ]);

        $borrower->update($data);

        return redirect(route('borrower.index'))->with('msg','Borrower is Updated Successfully!');
    }

    public function delete(Borrower $borrower){
        $borrower->delete();

        return redirect(route('borrower.index'))->with('msg','Borrower is deleted Successfully!');
    }
}
