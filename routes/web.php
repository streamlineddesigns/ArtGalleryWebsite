<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\ArtCollectionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//used by public for browsing website
Route::get('/', [IndexController::class, 'index'])->name('homepage');

Route::get('about', function () {
    return view('about');
});

Route::get('ar', function () {
    return view('ar');
});

Route::post('contact', [ContactController::class, 'index'])->name('contact');

Route::get('/art/collections/{collection}', [ArtCollectionController::class, 'show']);

//used by admin for updating collections & paintings
Route::resource('collections', CollectionController::class)->middleware('auth');
Route::resource('paintings', PaintingController::class)->middleware('auth');

//Used by admin for uploading images
Route::get('images/{foldername}', [ImageController::class, 'index'])->name('images.index')->middleware('auth');//index of all images
Route::get('images/{foldername}/upload/', [ImageController::class, 'create'])->name('images.create')->middleware('auth');//show create form for images
Route::get('images/{foldername}/{filename}', [ImageController::class, 'show'])->name('images.show')->middleware('auth');//show specific images by foldername/filename
Route::post('images/{foldername}', [ImageController::class, 'store'])->name('images.store')->middleware('auth');//store image to disk


//Route::resource('images', ImageController::class);


//Route::resource('images', ImageController::class)->middleware('auth');
//Route::resource('images/{image}', ImageController::class)->middleware('auth');


Route::get('color', [ColorController::class, 'index'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

/* Use this after an admin account has all ready been created or seeded. Otherwise comment it out to create account */
Route::get('/register', function () {
    App::abort(404);
});