@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{$movie-> id}} - {{$movie-> title}} - {{$movie -> original_title}} - {{$movie -> nationality}} - {{$movie -> date}} - {{$movie -> vote}} </li>
        @endforeach
    </ul>
@endsection