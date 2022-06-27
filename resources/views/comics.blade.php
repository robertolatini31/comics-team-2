@extends('layouts.app')

@section('content')
    <main id="site_main">

        @include('partials.jumbotron')

        <div class="container">
            <h3 class="current_series">current series</h3>
            <!-- /.current_series -->
            <div class="container_cards pt-5">
                <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 rowc-cols-lg-4 row-cols-xl-5 row-cols-xxl-6">
                @forelse($books as $index => $book)
                    <div class="col">  
                        <div class="my_card">
                            <a href="{{route('books_show', $index)}}">
                                <img src="{{$book['thumb']}}" alt="book_img">
                            </a>
                            <h4>{{$book['series']}}</h4>
                            <p>{{$book['price']}}</p>
                            <p>{{$book['type']}}</p>
                        </div>
                        <!-- /.card -->
                    </div>
                @empty
                    <p>no books</p>
                @endforelse
                </div>
            </div>
            <!-- /.container_cards -->

            <div class="btn_container">
                <button>load more</button>
            </div>
            <!-- /.btn_container -->
            
        </div>
        <!-- /.container -->

        @include('partials.services')
        @include('partials.menu_section')
    </main>
    
    
@endsection