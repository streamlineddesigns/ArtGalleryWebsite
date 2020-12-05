<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\Color;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::latest()->paginate(5);

        return view('collections.index', compact('collections'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        return view('collections.create', compact('colors'));
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
            'name' => 'required',
            'description' => 'required',
            'background_image_url' => 'required',
            'name_color' => 'required'
        ]);

        Collection::create($request->all());

        return redirect()->route('collections.index')
            ->with('success', 'Collection created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $colors = Color::all();
        return view('collections.edit', compact('collection', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'background_image_url' => 'required',
            'name_color' => 'required'
        ]);

        $collection->update($request->all());

        return redirect()->route('collections.index')
            ->with('success', 'Collection updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        return redirect()->route('collections.index')
            ->with('success', 'Collection deleted successfully');
    }
}
