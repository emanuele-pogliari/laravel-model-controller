@extends('layouts/app')

@section('content')

<ul class="list-unstyled">
@foreach($movies as $movie) 
<li class="mb-4">
    <p class="m-0">Local Title: {{$movie->title}}</p>
    <p class="m-0">Original title: {{$movie->original_title}}</p>
    <p class="m-0">Nationality: {{$movie->nationality}}</p>
    <p class="m-0">Release date: {{$movie->date}}</p>
    <p class="m-0">Vote: {{$movie->vote}}</p>
</li>
@endforeach
</ul>

@endsection