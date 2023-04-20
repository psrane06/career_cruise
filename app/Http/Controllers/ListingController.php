<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public static function index()
    {
        // $listings = Listing::all();
        // dd(request('tag'));
        return view(
            'listing.index',
            [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
            ]
        );
    }

    public static function show(Listing $listing)
    {
        return view(
            'listing.show',
            [
                'listing' => $listing
            ]
        );
    }
}
