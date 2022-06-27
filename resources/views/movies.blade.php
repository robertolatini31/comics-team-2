@extends('layouts.app')

@section('content')
    <main class="main_movies text-center py-4">
            @foreach($books as $book)
                <ul class="p-0 m-0">
                    <h3>
                        {{$book['series']}}
                    </h3>
                    @foreach($book['writers'] as $writer)
                        <li>
                            {{$writer}}
                        </li>
                    @endforeach
                </ul>
            @endforeach
    </main>
@endsection