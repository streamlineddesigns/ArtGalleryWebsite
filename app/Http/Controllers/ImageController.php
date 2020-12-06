<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App;

define("COLLECTION_FOLDER", "collections");
define("PAINTING_FOLDER", "paintings");

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($foldername, Request $request)
    {
        if (isset($foldername) && ($foldername == COLLECTION_FOLDER || $foldername == PAINTING_FOLDER)) {

            $files = Storage::disk("uploads")->allFiles($foldername);

            return Inertia::render('Images/Index', [
                'files' => $files,
                'folder' => $foldername,
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
    public function create($foldername, Request $request)
    {
        return Inertia::render('Images/Create', [
            'folder' => $foldername,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($foldername, Request $request) 
    {
        //dd($request->file('logo'));

        //$path = $request->file('logo')->store("upload/$foldername");
        $path = Storage::putFile("public/uploads/$foldername", $request->file('logo'));
        echo $path;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($foldername, string $filename, Request $request)
    {
        if (isset($filename) && ($foldername == COLLECTION_FOLDER || $foldername == PAINTING_FOLDER)) {

            $filepath = $foldername . "/" . $filename;
            $exists = Storage::disk("uploads")->exists($filepath);

            if ($exists) {

                $qualified_img_src= "../../uploads/$filepath";
                //echo "<img src='../../uploads/$filepath' alt='$filepath image'>";

                return Inertia::render('Images/Show', [
                    'img_src' => $qualified_img_src,
                    'folder' => $foldername,
                ]);

            } else {
                App::abort(404);
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
