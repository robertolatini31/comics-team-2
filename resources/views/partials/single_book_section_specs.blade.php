<div class="single_book_section_specs py-5">
       <div class="container">
            <div class="row row-cols-2">
                <div class="col p-4">
                    <h5 class="m-0 py-3 border-bottom">Talent</h5>
                    <div class="row py-3 border-bottom">
                        <div class="col-4">
                            <h6>Art by:</h6>
                        </div>
                        <div class="col-8">
                            <p class="m-0">
                                @foreach($book['artists'] as $artist)
                                    <a class="fs-6" href="#">{{$artist}}</a>,
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-4">
                            <h6>Written by:</h6>
                        </div>
                        <div class="col-8">
                            <p class="m-0">
                                @foreach($book['writers'] as $writer)
                                    <a class="fs-6" href="#">{{$writer}}</a>,
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col p-4">
                     <h5 class="m-0 py-3 border-bottom">Specs</h5>
                    <div class="row py-3 border-bottom">
                        <div class="col-4">
                            <h6 class="m-0">Series:</h6>
                        </div>
                        <div class="col-8">
                                <a class="fs-6" href="#">{{$book['series']}}</a>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-4">
                            <h6 class="m-0">U.S. Price:</h6>
                        </div>
                        <div class="col-8">
                                <a class="fs-6" href="#">{{$book['price']}}</a>
                        </div>
                    </div>
                    <div class="row py-3 border-bottom">
                        <div class="col-4">
                            <h6 class="m-0">On Sale Date:</h6>
                        </div>
                        <div class="col-8">
                                <a class="fs-6" href="#">{{$book['sale_date']}}</a>
                        </div>
                    </div>
                </div>
                </div>
                
                </div>
                
            </div>
       </div>
   </div>