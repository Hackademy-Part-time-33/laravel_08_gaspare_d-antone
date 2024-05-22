<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function index(){

        $books = Book::all();
        return view ('books.index', compact('books'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'years' => 'nullable|integer',
            'page'  => 'nullable|integer',
    
    
    ]);
        Book::create($request->all());
        return redirect()->route('index');

    }


}
