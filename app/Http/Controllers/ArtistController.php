<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        Artist::create([
            'name' => $request->name
        ]);

        return redirect('/home');
    }
}