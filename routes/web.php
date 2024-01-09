<?php

use Illuminate\Support\Facades\Route;

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
        'listings' => [
            [
                'id' => 1,
                'title' => 'listing one',
                'description' => 'husssein alokla is the best student in the world'

            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' => 'husssein alokla is the best student in the world okay?'

            ]
        ]
    ]);
});




