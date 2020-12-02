<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Color;
use App\Models\Painting;
use App\Models\Collection_Paintings;
use DB;

class ArtCollectionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        $colors = Color::all();
        $collection_data = DB::table('collections')
        ->select('collections.*','collection_paintings.*','paintings.*')
        ->leftJoin('collection_paintings','collections.id','=','collection_paintings.collection_id')
        ->leftJoin('paintings','paintings.id','=','collection_paintings.painting_id')
        ->where('collections.id', "=", $collection->id)
        ->get();
        /*SELECT collections.*, collection_paintings.*, paintings.*
        FROM collections
        LEFT JOIN collection_paintings ON collections.id = collection_paintings.collection_id
        LEFT JOIN paintings ON paintings.id = collection_paintings.painting_id
        WHERE collections.id = 4
        ORDER BY collections.id;*/



        return view('art.collections', compact('collection', 'collection_data', 'colors'));
    }
}
