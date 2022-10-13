<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/Group 11.png" sizes="32x32" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/814966721c.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <title>My Restaurant</title>
</head>

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <nav class="nav">
                    <a href="/" class="logo">Indofood</a>

                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <div class="nav__link hide">
                        <a href="{{ route('index') }}">home</a>
                        <a href="{{ route('about') }}">about</a>
                        <a href="#">Product</a>
                        <a href="#">Testimonial</a>
                        <a href="#">contact</a>
                    </div>
                </nav>
            </div>
        </header><br>
        <main role="main" class="inner cover">
            @yield('content')
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="button">
                    <a href="{{ route('product') }}">ORDER NOW</a>
                </p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>