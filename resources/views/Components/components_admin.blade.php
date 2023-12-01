<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>@yield('title')</title>
</head>
<body>
    {{-- Header/Navbar --}}
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-2 container">

        <a class="navbar-brand px-2" href="{{route('home_guest')}}">
            <img src="{{asset('storage/images/gameslot_logo.png')}}" width="75" height="75" alt="GameSlot">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('manage_game')}}" class="nav-link px-2 link-dark">Manage Game</a></li>
        </ul>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('manage_genre')}}" class="nav-link px-2 link-dark">Manage Game Genre</a></li>
        </ul>

        <form action="{{route('search_admin')}}" class="mx-auto" role="search">
            @csrf
            <input type="search" class="form-control" name="search_game_name" style="width: 700px;" placeholder="Search Game..." aria-label="Search">
        </form>

        <a href="{{route('cart_view')}}"><i class="bi bi-cart2 fa-lg" style="margin-left: 20px; margin-right: 20px; color: black; font-size:20px;"></i></a>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="{{route('profile_admin', ['id' => Auth::user()->id])}}"><i class="bi bi-person"></i> Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('logout')}}"><i class="bi bi-box-arrow-left"></i> Sign out</a></li>
          </ul>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
