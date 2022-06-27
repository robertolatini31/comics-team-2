@extends('layouts.app')

@section('content')

    <main class="main_characters text-center py-4">
        @foreach($books as $book)
            <ul class="p-0 m-0">
                <h3>
                    {{$book['title']}}
                </h3>
                @foreach($book['artists'] as $artist)
                    <li>
                        {{$artist}}
                    </li>
                @endforeach
            </ul>
        @endforeach
    </main>

@endsection