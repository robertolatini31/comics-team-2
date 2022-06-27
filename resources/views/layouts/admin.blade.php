<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">DC</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">

                <a class="dropdown-item text-danger fw-bold" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'admin.home' ? 'active' : '' }}" href="{{ route('admin.home') }}">
                                Dashboard <span class="sr-only {{Route::currentRouteName() !== 'admin.home' ? 'd-none' : '' }}">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'admin.comics.index' ? 'active' : '' }}" href="{{ route('admin.comics.index') }}">
                                Comics  <span class="sr-only {{Route::currentRouteName() !== 'admin.comics.index' ? 'd-none' : '' }}">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{Route::currentRouteName() === 'admin.series.index' ? 'active ps-3' : '' }}" href="{{ route('admin.series.index') }}">
                                Seriess <span class="sr-only {{Route::currentRouteName() !== 'admin.series.index' ? 'd-none' : '' }}">(current)</span>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Users
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">

                <div id="app">

                    @yield('content')

                </div>

            </main>


        @include('partials.footer')

        </div>
    </div>
</body>

</html>
