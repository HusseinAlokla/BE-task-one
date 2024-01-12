<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [

            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }
    public function create()
    {
        return view('listings.create');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'compnay' => ['required', Rule::unique('listings'), 'company'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'descriptio' => 'required',
        ]);

        return view('listings.store');
    }
}
