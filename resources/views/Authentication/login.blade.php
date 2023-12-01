<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>

<body>

    <div class="col-md-3 container d-flex flex-wrap justify-content-center mt-5">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$errors->first()}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin w-100 m-auto">
            <form action={{route('login')}} method="POST" class="flex-wrap">
                @csrf
                <a class="navbar-brand px-2 d-flex justify-content-center text-center" href="/">
                    <img src="{{asset('storage/images/gameslot_logo.png')}}" width="75" height="75" alt="GameSlot">
                </a>
                <h1 class="h3 mb-3 fw-normal d-flex justify-content-center text-center">Log In with Registered Account
                </h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                        value="{{Cookie::get('userEmail') !==  null ? Cookie::get('userEmail') : ''}}">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                        value="{{Cookie::get('userPassword') !==  null ? Cookie::get('userPassword') : ''}}">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                </div>

                {{-- @if ($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif --}}

                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <p class="mt-4 mb-1 text-muted d-flex flex-wrap justify-content-center">Need an account?</p>
                <a href="{{route('register')}}" class="d-flex flex-wrap justify-content-center mb-3">Register Here</a>
            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>
