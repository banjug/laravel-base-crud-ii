@extends('layouts.main-layout')
@section('content')
    <main>
        <h2>{{$movie->title}}</h2>
        <h3>{{$movie->subtitle}} - {{$movie->release_date}}</h3>
    </main>
@endsection