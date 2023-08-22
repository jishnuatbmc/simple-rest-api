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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

// single listing 
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
})->where('id', '[1-2]');

// // GET route
// Route::get('/hello', function () {
//     return response('{"greet":"hi","name":"lonebots"}', 200)
//         ->header('Content-Type', 'application/json')
//         ->header('foo', 'bar');
// });

// // GET with  route 
// Route::get('posts/{id}', function ($id) {
//     /* 
//     dd  --> die and dump
//     ddd --> die, dump and debug
//     */
//     dd($id); // die and dump -> shows the values after stoping all the other process.
//     return response('Post' . $id);
// })->where('id', '[0-9]');

// // get data from a query param 
// Route::get('/search', function (Request $request) {
//     return response($request->name . '  ' . $request->city);
// });
