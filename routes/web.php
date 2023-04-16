<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Request;
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

// Get all listings
Route::get('/', function () {
    $listings = Listing::all();
    return view(
        'listings',
        [
            'heading' => "Listings",
            'listings' => $listings
        ]
    );
});

Route::get('/listing/{id}', function ($id) {
    $listing = Listing::find($id);
    return view(
        'listing',
        [
            'heading' => "Listing",
            'listing' => $listing
        ]
    );
});
