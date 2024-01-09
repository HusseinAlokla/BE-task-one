<?php

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
/*Route::get('/', function () {
    return view(
        'Listings',
        [
            'heading' => 'latest listings'
        ]
    );


});*/
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => Listing::all()
    ]);
});


//finding single listing
Route::get('/listing{id}', function ($id) {
    return view('listing', ['listing' => Listing::find($id)]);
});


