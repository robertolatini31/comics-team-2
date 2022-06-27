<div class="description_section bg-white py-4">
        <div class="container">
            <div class="row py-5">
                <div class="col-8">
                    <h1 class="text-uppercase description_section_title fs-3">{{$book['title']}}</h1>
                    <div class="row bg_dark_green">
                        <div class="col-8 border-bottom border-end border_dark_trasparent py-3 d-flex align-items-center justify-content-between">
                            <h6 class="light_green m-0">US Price: <span class="text-white">{{$book['price']}}</span></h6>
                            <h6 class="light_green text-uppercase m-0">aviable</h6>
                        </div>
                        <div class="col-4 py-3 border-bottom border_dark_trasparent d-flex align-items-center justify-content-end text-white">
                            <h6 class="m-0">Check Aviability</h6>
                            <i class="fa-solid fa-sort-down mb-2 ms-1"></i>
                        </div>
                    </div>
                    <p class="p_description text-dark mb-0 py-3">{{$book['description']}}</p>
                </div>
                <div class="col-4 d-flex flex-column ps-4">
                    <h5 class="text-uppercase text-secondary text-end">ADVERTISEMENT</h5>
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- /.description_section -->