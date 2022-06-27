<header id="site_header">
    <div class="up_colored">
        <div class="container">
            <div class="d-flex align-items-center justify-content-end p-1 text-white">
                    <span class="text-uppercase me-5">dc power visa&reg;</span>
                    <span class="text-uppercase">additional dc sites <i class="fa-solid fa-caret-down ms-1"></i></span>
            </div>
        </div>
    </div>
    <!-- /.up_colored -->
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo_dc">
            </div>
       
            <div class="col-8">
            <nav>
                <ul class="m-0 p-0">
                    <li class=" nav_li {{Route::currentRouteName() === 'characters' ? 'my_active' : ''}}">
                        <a href="{{route('characters')}}" class="text-uppercase">characters</a>
                    </li>
                    <li class="nav_li {{Route::currentRouteName() === 'comics' ? 'my_active' : ''}}">
                        <a href="{{route('comics')}}" class="text-uppercase">comics</a>
                    </li>
                    <li class="nav_li {{Route::currentRouteName() === 'movies' ? 'my_active' : ''}}">
                        <a href="{{route('movies')}}" class="text-uppercase">movies</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">tv</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">games</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">collectibles</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">videos</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">fans</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">news</a>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="text-uppercase">shop <i class="fa-solid fa-caret-down dc_primary ms-1"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- ./ navbar  -->
            </div>
            <!--/.navbar_header  -->
            <div class="col-2">
            <div class="serach_div d-flex align-items-center justify-content-end">
            <input class="form-control border-0 rounded-0 text-end px-0" type="search" placeholder="Search" aria-label="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            </div>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
   </header>
   <!-- /.SiteHeader -->