@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<main>

   @include('partials.single_book_img_section')

   @include('partials.single_book_description_section')

   @include('partials.single_book_section_specs')

  @include('partials.single_book_section_digital')

</main>

@include('partials.menu_section')

@endsection