<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        $series = [
            'Vikings',
            'Peaky Blinders',
            'Breaking Bad'
        ];
        
        return view('series.index')->with('series', $series);   
    }

    public function create(){
        return view('series.create');
    }
}
