<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function index(){

        $books = Book::paginate(3);
        return view ('books.index', compact('books'));
    }

    public function create(){
        return view ('books.create');
    }

    public function show(book $book){
        return  view('books.show', compact('book'));

    }



    public function store(BookCreateRequest $request){

        $path_image = '';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }
      
        // dd($request->all());
       
        Book::create([
            'title'=> $request->title,
            'years'=> $request->years,
            'pages'=> $request->pages,
            'image'=> $path_image
        ]);
        session()->flash('success','libro creato con successo');
        // Book::create($request->all());
        return redirect()->route('books.index');

    }


}
