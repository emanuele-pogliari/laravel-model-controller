@extends('layouts/app')

@section('content')
<div class="container">
<h1 class="text-center my-4 text-white">Film</h1>

<div class="row movie-container">
@foreach($movies as $movie) 
<div class="col-4 ">
    <div class="card text-center mb-4 border-0 shadow p-1 pb-2">
        <img src="{{$movie->poster}}" alt="">
        <p class="m-0 fw-bold my-3 fs-5">{{$movie->title}}</p>
        <p class="m-0"><span class="property-key">Original title:</span> {{$movie->original_title}}</p>
        <p class="m-0"><span class="property-key">Nationality:</span> {{$movie->nationality}}</p>
        <p class="m-0"><span class="property-key">Release date</span>: {{$movie->date}}</p>
        <p class="m-0"><span class="property-key">Vote:</span> {{$movie->vote}}</p>
    </div>
</div>
@endforeach
</div>
</div>
@endsection