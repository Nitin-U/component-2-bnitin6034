<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cds = Cd::latest()->paginate(8);
        return view('cds.index',compact('cds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cds.create');
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
            'name' => 'nullable|alpha|min:3',
            'band' => 'required|alpha',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'playlength' => 'required|numeric',
            'image' => 'required',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens',
            'image.image' => 'Selected file must be an image.'
        ]);
        Cd::create($request->all());
        return redirect()->route('cds.index')->with('success','Cd Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
        return view('cds.show',compact('cd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd)
    {
        return view ('cds.edit',compact('cd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cd $cd)
    {
        if($request->image==null){
            $request['image']=$cd->image;
        }
        $validateMsg = $request -> validate([
            'title' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'name' => 'nullable|alpha|min:3',
            'band' => 'required|alpha',
            'price' => 'required|numeric',
            'description' => 'required|min:25',
            'playlength' => 'required|numeric',
        ],[
            'title.regex' => 'Title must only contain alphabets, whitespace & hyphens'
        ]);

        $request->except('image');
        $cd->update($request->all());
        return redirect()->route('cds.show',$cd->id)->with('success','Cd Data Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cd $cd)
    {
        $cd->delete();
        return redirect()->route('cds.index')->with('success','Cd deleted successfully');
    }
}
