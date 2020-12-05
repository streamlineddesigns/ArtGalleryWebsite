<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Collection;
use App\Models\Collection_Paintings;

class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paintings = Painting::latest()->paginate(5);

        return view('paintings.index', compact('paintings'))
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
        $collections = Collection::all();
        return view('paintings.create', compact('colors', 'collections'));
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
            'collection_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'footer_text' => 'required',
            'price' => 'required',
            'image_url' => 'required',
            'name_color' => 'required',
            'button_color' => 'required'
        ]);

        $new_painting = Painting::create($request->all());

        $painting_id = $new_painting->id;
        $collection_id = $request->collection_id;

        //create reference in join table if successful
        if ($painting_id != null) {
            Collection_Paintings::create([
                'collection_id' => $collection_id,
                'painting_id' => $painting_id,
            ]);
        }

        return redirect()->route('paintings.index')
            ->with('success', 'Painting created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function show(Painting $painting)
    {
        return view('paintings.show', compact('painting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function edit(Painting $painting)
    {
        $colors = Color::all();
        return view('paintings.edit', compact('painting', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Painting $painting)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'footer_text' => 'required',
            'price' => 'required',
            'image_url' => 'required',
            'name_color' => 'required',
            'button_color' => 'required'
        ]);

        $painting->update($request->all());

        return redirect()->route('paintings.index')
            ->with('success', 'Painting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
        $painting->delete();

        return redirect()->route('paintings.index')
            ->with('success', 'Painting deleted successfully');
    }
}