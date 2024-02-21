<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name', 'ASC')->get();

        $successMessage = session('success.message');
        
        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);   
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('success.message', "{$serie->name} Series created successfully");

        return to_route('series.index');
    }
    
    public function destroy(Request $request)
    {
        $serie = Serie::find($request->id);
        $serie->delete();
        $request->session()->flash('success.message', "{$serie->name} Series deleted successfully");

        return to_route('series.index');
    }
}
