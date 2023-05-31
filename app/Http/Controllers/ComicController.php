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
        return view('comics.create', compact('comic'));
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
            'title'=> 'required|unique:ComicBook|max:255',
            'description'=>'required',
            'thumb'=>'required|max:255',
            'price'=> 'required',
            'series'=> 'required|max:100',
            'type'=> 'required|max:50'
        ]);

        $newComicBook = new Comic;
        $newComicBook->title = $data['title'];
        $newComicBook->description = $data['description'];
        $newComicBook->thumb = $data['thumb'];
        $newComicBook->price = $data['price'];
        $newComicBook->series = $data['series'];
        $newComicBook->type = $data['type'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Comic $Comic)
    {
        //$comic = comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Comic $Comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, Comic $Comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Comic $Comic)
    {
        $Comic->delete();
    }
}
