<?php

namespace App\Http\Controllers;

use App\Models\MySite;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = MySite::where('title', 'like', "%{$query}%")
            ->get();

        return view('search.search', compact('results'));
    }
}
