<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(10);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:comics|max:100',
            'description' => 'required',
            'thumb' => 'required|url|max:250',
            'price' => 'numeric|min:0|max:5000',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:60'

        ]);

        $formData = $request->all();

        $newComic = Comic::create($formData);

        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|unique:comics|max:100',
            'description' => 'required',
            'thumb' => 'required|url|max:250',
            'price' => 'numeric|min:0|max:5000',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:60'

        ]);

        $formData = $request->all();

        $comic->update($formData);

        return redirect()->route('comics.index');
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

        return redirect()->route('comics.index');
    }
}
