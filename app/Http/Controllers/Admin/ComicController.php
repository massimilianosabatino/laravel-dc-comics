<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicFormRequest;
use App\Models\Comic;
//Validation using controller
// use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicFormRequest $request)
    //Validation using controller
    // public function store(Request $request)
    {
        //Validation using controller
        // $request->validate([
        //     'title' => 'max:50|required',
        //     'description' => 'nullable',
        //     'thumb' => 'url|nullable|ends_with:png,jpg,jpeg,webp',
        //     'price' => 'decimal:2|between:1,100',
        //     'series' => 'max:55|nullable',
        //     'sale_date' => 'date',
        //     'type' => [
        //         'max:30',
        //         Rule::in(['comic book', 'graphic novel'])
        //     ],
        //     'artists' => 'nullable',
        //     'writers' => 'nullable'
        // ]);
        $request->validated();
        //Get data from form
        $data = $request->all();

        //Create new instance
        $newComic = new Comic();

        //Manual fill data
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->artists = $data['artists'];
        // $newComic->writers = $data['writers'];

        $newComic->fill($data);
        $newComic->save();

        //Return to list page
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicFormRequest $request, Comic $comic)
    {
        // $request->validated();

        $data = $request->all();

        $comic->update($data);

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
