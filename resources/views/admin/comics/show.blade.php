@extends('layouts.admin')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <div class="img_container d-flex align-items-center">
            <img src="{{$comic->cover_image}}" alt="">
            <h1 class="display-3">{{$comic->title}}</h1>
        </div>
        <div class="metadata py-3">
           <div class="category">
           <strong>Slug:</strong> {{$comic->slug}}
           </div>
        </div>
        <p class="lead py-4">{{$comic->content}}</p>
    </div>
</div>

@endsection