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
    <title>GameSlot | Register</title>

    <style>
        .button-container button {
            width: 40%;
            /* Adjust as needed */
        }

    </style>
</head>

<body>

    {{-- Registration form --}}
    <div class="col-md-3 container d-flex flex-wrap justify-content-center mt-3">
        <main class="form-signin w-100 m-auto">
            <form action="/register/post" method="POST" class="flex-wrap">
                @csrf

                <a class="navbar-brand px-2 d-flex justify-content-center text-center" href="/">
                    <img src="{{asset('storage/images/app_logo.png')}}" width="75" height="75" alt="GameSlot">
                </a>

                <h1 class="h3 mb-3 fw-normal d-flex justify-content-center text-center mt-3">Register A New Account</h1>

                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="text"
                        value="{{old('name')}}" placeholder="Your Name" name="name">
                    <label for="floatingInput">Full name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{old('email')}}" id="email" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="Input Your Password" name="password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror"
                        id="confirmPassword" placeholder="Confirm Your Password" name="confirmPassword">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('confirmPassword')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form mt-3">
                    <label>Gender</label>
                </div>
                <div class="form-floating">
                    <div class="form-check">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio" value="Male"
                            name="gender" id="gender">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio"
                            value="Female" name="gender" id="gender">
                        <label class="form-check-label mb-3" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                    @error('gender')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label>Date of Birth</label>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                        name="date_of_birth" value="{{old('date_of_birth')}}" id="">
                    @error('date_of_birth')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="btn btn-lg btn-primary mt-3" type="submit" style="width: 100%;">Register Account</button>

                <a href="{{ route('landing_page') }}" class="btn btn-lg btn-secondary mt-3" style="width: 100%;">Back to Landing Page</a>

                <p class="mt-3 mb-1 text-muted d-flex flex-wrap justify-content-center">Already have an account?</p>
                <a href="{{route('login_page')}}" class="d-flex flex-wrap justify-content-center mb-3">Login Here</a>
            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
