<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }
    
    public function show($id) {
        $movie = Movie::findOrFail($id);
        return view('pages.show', compact('movie'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $data = $request -> validate(
            [
                'title'=>'required|string',
                'subtitle'=>'required|string',
                'release_date'=>'required|date',
            ]
        );

        $movies = Movie::create($data);
        // return redirect() -> route('home');
        return redirect() -> route('show', $movies->id);
    }

    public function edit($id) {
        $movie = Movie::findOrFail($id);
        return view('pages.edit', compact('movie'));
    }

    public function update(Request $request, $id) {
        // dd($id, $request->all());
        $data = $request -> validate(
            [
                'title'=>'required|string',
                'subtitle'=>'required|string',
                'release_date'=>'required|date',
            ]
        );
        
        $movie = Movie::findOrFail($id);
        $movie ->update($data);
        return redirect() -> route('show', $movie->id);
    }

    public function delete($id) {
        $movies = Movie::findOrFail($id);
        $movies->delete();
        return redirect() -> route('home');
    }
    
}
