<?php

namespace App\Http\Controllers;

use App\Models\Browser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrowserController extends Controller
{
    public function show($id)
    {
        // Завантажити деталі про браузер відповідно до id
        $browser = Browser::find($id);

        
        $user = Auth::user();
        $favoriteBrowsers = $user->favorites->pluck('id')->toArray();

        // Pass the browser details to the view
        return view('browser', compact('browser', 'favoriteBrowsers'));

    }
}
