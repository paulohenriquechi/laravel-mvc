<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name', 'ASC')->get();
        
        return view('series.index')->with('series', $series);   
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $seriesName = $request->input('name');

        $serie = new Serie();
        $serie->name = $seriesName;
        $serie->save();

        return redirect('/series');
    }
}
