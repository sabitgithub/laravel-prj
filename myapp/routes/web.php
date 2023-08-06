<?php


use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

/*All View*/
Route::get('/', [ListingController::class, 'index']);
/* Show Create Form*/
Route::get('/listings/create', [ListingController::class, 'create']);
/*Store data*/
Route::post('/listings', [ListingController::class, 'store']);
/*Single View*/
Route::get('/listing/{listing}', [ListingController::class, 'show']);
/*Show Edit Form*/
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
/*Submit Edit Form*/
Route::put('/listings/{listing}', [ListingController::class, 'update']);
/*Delete Data*/
Route::delete('/listing/{listing}', [ListingController::class, 'destroy']);
/*Show Register Create Form*/
Route::get('/register', [UserController::class, 'create']);
/*Submit New Register Create Form*/
Route::post('/users', [UserController::class, 'store']);
/*Logout*/
Route::post('/logout', [UserController::class, 'logout']);
/*Login Form*/
Route::get('/login', [UserController::class, 'login']);
/*Login Submit*/
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//Route::get('/users/{id}/{name}', function ($id, $name) {
//    return 'This is user: ' . $id . ' name: ' . $name;
//});


//Route::get('/', [PagesController::class, 'index']);


//Route::get('/about', function () {
//    return view('listings.about');
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





