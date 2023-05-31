<?php

namespace App\Http\Controllers;

use App\Models\comic;
use App\Models\ComicBook;
use Illuminate\Http\Request;

class ComicBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = comic::all();
        return view('comics.index', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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

        $newComicBook = new ComicBook;
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
