<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('pages/listings', [
        'heading' => 'Latest Listing',
        'listings' => Listing::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    return view('pages/listing', [
        'listings' => Listing::find($id)
    ]);
});


//Route::get('/users/{id}/{name}', function ($id, $name) {
//    return 'This is user: ' . $id . ' name: ' . $name;
//});


//Route::get('/', [PagesController::class, 'index']);


//Route::get('/about', function () {
//    return view('pages.about');
//});
//
//Route::get('/posts/{id}', function ($id) {
//    return response('Post' . $id);
//})->where('id', '[0-9]+');
//
//
//Route::get('/search/', function (Request $request) {
//    dd($request->name . ' ' . $request->city);
//});





