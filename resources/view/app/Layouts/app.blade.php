<!doctype html>
<html lang="en">

<head>
   @include('app.layouts.head-tag')
   @yield('head-tag')
</head>

<body>

<div class="container-xxl bg-white p-0">


    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <a href="<?= route('index') ?>"><h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1></a>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= route('my.panel.index') ?>" class="nav-item nav-link <?= currentUrl() == route('index') ? 'active' : '' ?>">panel</a>
                        <a href="<?= route('index') ?>" class="nav-item nav-link <?= currentUrl() == route('index') ? 'active' : '' ?>">Home</a>
                        <a href="<?= route('about') ?>" class="nav-item nav-link <?= currentUrl() == route('about') ? 'active' : '' ?>">About</a>
                        <a href="<?= route('services') ?>" class="nav-item nav-link <?= currentUrl() == route('services') ? 'active' : '' ?>">Service</a>
                        <a href="<?= route('menu') ?>" class="nav-item nav-link <?= currentUrl() == route('menu') ? 'active' : '' ?>">Menu</a>
                        <a href="<?= route('contact') ?>" class="nav-item nav-link <?= currentUrl() == route('contact') ? 'active' : '' ?>">Contact</a>
                        <a href="<?= route('booking') ?>" class="nav-item nav-link <?= currentUrl() == route('booking') ? 'active' : '' ?>">Book A Table</a>
                        <button type="button" class="btn-cart btn btn-primary mt-4 ">cart</button>
                    </div>
                </div>
            </nav>
        </div>


            @yield('content')


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                            <a class="btn btn-link" href="<?= route('index') ?>">Home</a>
                            <a class="btn btn-link" href="<?= route('about') ?>">About Us</a>
                            <a class="btn btn-link" href="<?= route('services') ?>">Reservation</a>
                            <a class="btn btn-link" href="<?= route('menu') ?>">Menu</a>
                            <a class="btn btn-link" href="<?= route('contact') ?>">Contact Us</a>
                            <a class="btn btn-link" href="<?= route('booking') ?>">booking</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>iran tehran</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0916 751 6826</p>
                            <p class="mb-2"><i class="fa "></i>monarchframework@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href="https://github.com/milirezai/Restauran"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                            <h5 class="text-light fw-normal">Monday - Saturday</h5>
                            <p>09AM - 09PM</p>
                            <h5 class="text-light fw-normal">Sunday</h5>
                            <p>10AM - 08PM</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <form method="post" action="<?= route('newsLetter') ?>">
                                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" name="email" placeholder="Your email">
                                    <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        </div>


    @include('app.layouts.scripts')
    @yield('script')

</body>

</html>