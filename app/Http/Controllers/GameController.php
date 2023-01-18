<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isgameAdmin')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::latest()->paginate(8);
        return view('games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateMsg = $request -> validate([
            'title' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'name' => 'nullable|regex:/^[A-Za-z. ]+$/|min:3',
            'console' => 'required|regex:/^[a-zA-Z0-9 ]+$/',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'pegi' => 'required|numeric',
            'image' => 'required',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens',
            'name.regex' => 'Name must only contain alphabets, whitespace & dots',
            'console.regex' => 'Console must only contain alphabets, whitespace & numbers',
            'image.image' => 'Selected file must be an image.'
        ]);
        Game::create($request->all());
        return redirect()->route('games.index')->with('success','Game Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view ('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        if($request->image==null){
            $request['image']=$game->image;
        }
        $validateMsg = $request -> validate([
            'title' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'name' => 'nullable|regex:/^[A-Za-z. ]+$/|min:3',
            'console' => 'required|regex:/^[a-zA-Z0-9 ]+$/',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'pegi' => 'required|numeric',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens',
            'name.regex' => 'Name must only contain alphabets, whitespace & dots',
            'console.regex' => 'Console must only contain alphabets, whitespace & numbers'
        ]);

        $request->except('image');
        $game->update($request->all());
        return redirect()->route('games.show',$game->id)->with('success','Game Data Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success','Game deleted successfully');
    }
}
