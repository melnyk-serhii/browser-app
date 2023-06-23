<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Browser;
use Toastr;

class CatalogueController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $favoriteBrowsers = $user->favorites->pluck('id')->toArray();

        $browsers = Browser::all();

        return view('catalogue', compact('browsers', 'favoriteBrowsers'));
    }


    public function addToFavorites(Browser $browser)
    {
        $user = Auth::user();

        if ($user->favorites->contains($browser)) {
            $user->favorites()->detach($browser);
            // Toastr::error('Browser added to favorites.', 'Error');

            // return redirect()->back();
            return redirect()->back()->with('success', 'Browser removed from favorites.');
        }

        Session::flash('success', 'Browser added to favorites.');

        $user->favorites()->attach($browser);
        return redirect()->back()->with('success', 'Browser added to favorites.');
    }
}