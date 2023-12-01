<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamestore | Landing Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/app_logo.png') }}">
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .jumbotron {
            text-align: center;
            background-color: transparent;
        }

        .logo {
            max-width: 250px;
            max-height: 250px;
            /* Adjust the height as needed */
            margin-bottom: 20px;
        }

        .btn {
            width: 150px;
            margin: 10px;
            background-color: #ffffff;
            color: #000000;
        }

        .btn:hover {
            background-color: #007bff;
            color: #ffffff;
        }

    </style>
</head>

<body>
    <div class="jumbotron text-center">
    <img src="{{ asset('storage/images/app_logo.png') }}" alt="Logo" class="logo">
        <h1 class="display-4">Gamestore</h1>
        <p class="lead">Welcome to Gamestore Web App</p>
        <hr class="my-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a class="btn btn-primary btn-lg" href="{{ route('login_page') }}" role="button">Login </a>
            <a class="btn btn-primary btn-lg" href="{{ route('register_page') }}" role="button">Register </a>
        </div>
    </div>
    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <footer class="text-center py-3 my-4 border-top">
        <span class="mb-3 mb-md-0">© 2023 ED</span>
    </footer>

</body>

</html>