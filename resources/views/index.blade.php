<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Sport</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('main/css/theme.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex align-items-center fw-bolder fs-2 fst-italic" href="/">
                    <img src="{{ asset('template/logo1.png') }}" alt="" width="70%">
                    Sport
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <div class="bg-holder d-none d-sm-block"
                style="background-image:url(main/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain; height: 120%;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-sm-none"
                style="background-image:url(main/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-md-100">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">
                            <div class="rotating-text">
                                <p class="ms-5 ps-4 ">
                                    <span class="word w-1 fs-6">Sport</span>
                                    <span class="word w-2 fs-6">Run</span>
                                    <span class="word w-2 fs-6">Jump</span>
                                    <span class="word w-2 fs-6">Etc</span>
                                </p>
                            </div>
                        </h1>
                        <p class=" fs-1">Sistem Informasi Form Olahraga</p>
                        <div class="pt-3">
                            <form>
                                <a class="btn btn-lg btn-primary rounded-pill bg-gradient order-0"
                                    href="/login">Sign In</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->

    <script src="main/vendors/@popperjs/popper.min.js"></script>
    <script src="main/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="mainvendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="main/assets/js/theme.js"></script>
    <script src="main/js/script.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>
