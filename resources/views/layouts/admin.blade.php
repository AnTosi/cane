<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> DC @yield('page-title') </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <div class="wrapper d-flex">
            <aside class="d-inline-block mt-5">
                <div class="d-flex flex-column flex-shrink-0 p-3 text_main-blue" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text_main-blue text-decoration-none">
                        <img src="{{asset('img/dc-logo.png')}}" alt=""> <span class="fs-4">Dashboard</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item bg_main-blue">
                            <a href="{{route('admin.posts.index')}}" class="nav-link text-white" aria-current="page">Posts</a>
                        </li>
                        <li class="bg_main-blue">
                            <a href="#" class="nav-link text-white">Movies</a>
                        </li>
                        <li class="bg_main-blue">
                            <a href="#" class="nav-link text-white">Comics</a>
                        </li>
                        <li class="bg_main-blue">
                            <a href="#" class="nav-link text-white">Videos</a>
                        </li>
                        <li class="nav-item bg_main-blue">
                            <a href="{{route('admin.games.index')}}" class="nav-link text-white" aria-current="page">Games</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main>
                @yield('content')
            </main>
        </div>

        
    </body>
</html>