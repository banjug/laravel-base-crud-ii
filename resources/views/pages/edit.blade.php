@extends('layouts.main-layout')
@section('content')
    <main>
        <h2>
            Edit Movie
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('update', $movie->id)}}" method="POST">

            @method('POST')
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" placeholder="title" value="{{$movie->title}}"><br>
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" placeholder="subtitle" value="{{$movie->subtitle}}"><br>
            <label for="release_date">Release date</label>
            <input type="date" name="release_date" value="{{$movie->release_date}}"><br>
            <input type="submit" value="Edit">
        </form>
    </main>
@endsection