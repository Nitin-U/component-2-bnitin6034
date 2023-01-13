<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cd;
use App\Models\Game;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $books = Book::latest()->filter(request(['search','sort']))->get();
        $cds = Cd::latest()->filter(request(['search','sort']))->get();
        $games = Game::latest()->filter(request(['search','sort']))->get();
        return view('search',compact('books','cds','games'));
    }
}
