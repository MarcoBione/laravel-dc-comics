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
    public function show(Comic $comic)
    {
        //$comic = comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $request->all();

        //$comic->title = $data['title'];
        //$comic->description = $data['description'];
        //$comic->thumb = $data['thumb'];
        //$comic->price = $data['price'];
        //$comic->series = $data['series'];
        //$comic->type = $data['type'];
        //$comic->save();

        $comic->update($data);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
