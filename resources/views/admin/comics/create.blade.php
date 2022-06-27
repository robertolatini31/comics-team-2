@extends('layouts.admin')

@section('content')

<div class="container py-5">
@include('partials.error')
<form action="{{route('admin.comics.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titlehelp" value="{{old('title')}}">
    <div id="titlehelp" class="form-text">Inserire il titolo del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea type="text" class="form-control" name="content" id="content" aria-describedby="contenthelp">
    {{old('content')}}
    </textarea>
    <div id="contenthelp" class="form-text">Inserire la descrizione del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="serie_id" class="form-label">Seire</label>
    <select class="form-control @error('serie_id') is-invalid @enderror" name="serie_id" id="serie_id">
      <option value="">Scegli una serie</option>
        @foreach($series as $serie)
          <option value="{{$serie->id}}">{{$serie->name}}</option>
        @endforeach
    </select>
  </div>


  <div class="mb-3">
    <label for="cover_image" class="form-label">Image</label>
    <input type="text" class="form-control" name="cover_image" id="cover_image" aria-describedby="cover_imagehelp" value="{{old('cover_image')}}">
    <div id="cover_imagehelp" class="form-text">Inserire Immagine del fumetto</div>
  </div>
  <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
</div>

@endsection