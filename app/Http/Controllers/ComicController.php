<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comic = Comic::all();
        return view('comics.index', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title'=> 'required|unique:comics|max:255',
            'description'=>'required',
            'thumb'=>'max:255',
            'price'=> 'required',
            'series'=> 'required|max:100',
            'type'=> 'required|max:50'
        ]);

        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Comic $Comic)
    {
        //$comic = comic::find($id);
        return view('comics.show', compact('Comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Comic $Comic)
    {
        return view('comics.edit', compact('Comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, Comic $Comic)
    {

        $data = $request->all();

        $Comic->title = $data['title'];
        $Comic->description = $data['description'];
        $Comic->thumb = $data['thumb'];
        $Comic->price = $data['price'];
        $Comic->series = $data['series'];
        $Comic->type = $data['type'];
        $Comic->save();

        return redirect()->route("comics.show", $Comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Comic $Comic)
    {
        $Comic->delete();
        return redirect()->route("comics.index");
    }
}
