<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">


    <title>@yield('title')</title>
</head>
<body>
    {{-- Header/Navbar --}}
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-2 container">

        <a class="navbar-brand px-2" href="{{route('home_guest')}}">
            <img src="{{asset('storage/images/gameslot_logo.png')}}" width="75" height="75" alt="GameSlot">
        </a>

        <form action="{{route('search_guest')}}" class="mx-auto" role="search">
            @csrf
            <input type="search" class="form-control" name="search_game_name" style="width: 900px;" placeholder="Search Game..." aria-label="Search">
        </form>

        <a href="{{route('login_page')}}"><i class="bi bi-cart2 fa-lg" style="margin-left: 20px; margin-right: 5px; color: black; font-size:20px;"></i></a>

        <div class="col-md-2 text-end">
            <a href="{{route('login_page')}}" class="btn btn-outline-primary me-2 btn-block">Log In</a>
            <a href="{{route('register_page')}}" class="btn btn-outline-primary me-2 btn-block">Register</a>
        </div>
      </div>

    {{-- Web Content --}}
    <div class="container mt-5 mb-5">
        @yield('content')
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">© 2023 GameSlot</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
