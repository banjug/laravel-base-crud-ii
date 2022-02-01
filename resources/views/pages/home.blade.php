@extends('layouts.main-layout')
@section('content')
    <main>
        <h3>
            <a href="{{route('create')}}">Create</a> new Movie
        </h3>

        <h3>Movies list:</h3>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="{{route('show', $movie->id)}}">{{$movie->title}}</a><br>
                    {{$movie->subtitle}}
                    - <a href="{{route('edit', $movie->id)}}">EDIT</a>
                    - <a href="{{route('delete', $movie->id)}}">DELETE</a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection