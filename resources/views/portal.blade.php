<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portal</title>
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <style>
        .image {
            height: 270px;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(90, 92, 106, 1) 0%, rgba(32, 45, 58, 1) 81.3%);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            height: auto;
            border: none;
            background-color: #f4f4f5;
            box-shadow: 0 20px 34px rgb(196 201 219 / 50%);
            transition: 0.5s;
        }

        .card:hover {
            box-shadow: 0 20px 34px #3c91d65d;
        }

        .card-body {
            padding-left: 30px;
            padding-right: 40px;
            margin-top: 10px;
        }

        .caption {
            padding: 60px;
            padding-left: 110px;
        }
    </style>

</head>

<body>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        {{-- Header --}}
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                        <a class="navbar-brand fw-bold" href="/portal">Dashboard</a>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="fa-solid fa-right-from-bracket me-1"></i>
                                                Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        {{-- En Header --}}

        <div class="row-cols-12 image d-flex mb-3">
            <div class="col caption d-none d-md-block text-white mt-3">
                <div id="current_date"></div>
                <p class="fs-2 mb-0 fw-bold">Selamat Datang {{ auth()->user()->name }}!</p>
                <p>Semoga Harimu Menyenangkan.</p>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="px-5">
                    <lottie-player src="https://lottie.host/3a3cba81-7c1a-43fa-b3f2-71b6964a60ce/6WZsFOX4Wb.json"
                        speed="1" style="width: 450px; height: 280px" loop autoplay direction="1"
                        mode="normal"></lottie-player>
                </div>
            </div>
        </div>

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col col-lg-3 mb-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lari</h5>
                                <p class="card-text">
                                    Form Wasit Lari
                                </p>
                                <div class="mt-auto">
                                    <a href="" class="btn btn-primary stretched-link d-block">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 mb-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lempar</h5>
                                <p class="card-text">
                                    Form Wasit Lempar
                                </p>
                                <div class="mt-auto">
                                    <a href="" class="btn btn-primary stretched-link d-block">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 mb-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lompat</h5>
                                <p class="card-text">
                                    Form Wasit Lompat
                                </p>
                                <div class="mt-auto">
                                    <a href="" class="btn btn-primary stretched-link d-block">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 mb-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Tolak</h5>
                                <p class="card-text">
                                    Form Wasit Tolak
                                </p>
                                <div class="mt-auto">
                                    <a href="" class="btn btn-primary stretched-link d-block">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 mb-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Jalan</h5>
                                <p class="card-text">
                                    Form Wasit Jalan
                                </p>
                                <div class="mt-auto">
                                    <a href="" class="btn btn-primary stretched-link d-block">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Creates interval
        const interval = setInterval(() => {
            // Get current time
            const now = new Date();

            // Format date as in mm/dd/aaaa hh:ii:ss
            const dateTime = zeroFill((now.getMonth() + 1)) + '/' + zeroFill(now.getUTCDate()) + '/' + now
                .getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(
                    now.getSeconds());

            // Display the date and time on the screen using div#date-time
            document.getElementById('current_date').innerHTML = dateTime;
        }, 1000);
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
</body>

</html>
