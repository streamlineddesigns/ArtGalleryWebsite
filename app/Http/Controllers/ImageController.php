<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

define("COLLECTION_FOLDER", "collections");
define("PAINTING_FOLDER", "paintings");

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $folder = $request->folder;

        if ($request->has('folder') && ($folder == COLLECTION_FOLDER || $folder == PAINTING_FOLDER)) {

            $files = Storage::disk("uploads")->allFiles($folder);

            return Inertia::render('Images/Index', [
                'files' => $files,
            ]);

        } else {

            App::abort(404);
            
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if ($request->has('filename') && ($id == COLLECTION_FOLDER || $id == PAINTING_FOLDER)) {

            $filepath = $id . "/" . $request->filename;
            $exists = Storage::disk("uploads")->exists($filepath);

            if ($exists) {
                echo "<img src='../uploads/$filepath' alt='$filepath image'>";
            } else {
                return "don't got em";
            }

        } else {
            App::abort(404);
        }
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
