<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isbookAdmin')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(8);
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validateMsg = $request -> validate([
            'title' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'firstname' => 'nullable|alpha|min:3',
            'surname' => 'required|alpha',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'pages' => 'required|numeric',
            'image' => 'required',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens',
            'image.image' => 'Selected file must be an image.'
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')->with('success','Book Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view ('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        if($request->image==null){
            $request['image']=$book->image;
        }
        $validateMsg = $request -> validate([
            'title' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'firstname' => 'nullable|alpha|min:3',
            'surname' => 'required|alpha',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'pages' => 'required|numeric',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens'
        ]);

        $request->except('image');
        $book->update($request->all());
        return redirect()->route('books.show',$book->id)->with('success','Book Data Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','Book deleted successfully');
    }
}
