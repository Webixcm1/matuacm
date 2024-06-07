<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from booking.webestica.com/index-cab.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2024 10:39:52 GMT -->

<head>
    <title>@yield('title')</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="THConsulting">
    <meta name="description" content="Matuacm - Première plateforme de covoiturage au Cameroun">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    @stack('css')


</head>

<body>

    <!-- Header START -->
    <header class="navbar-light header-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img class="light-mode-item navbar-brand-item h-200px" src="{{ asset('assets/images/logo.png') }}"
                        alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="d-none d-sm-inline-block small"></span>
                </button>

                <!-- Responsive category toggler -->
                {{-- <button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse"
                    aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    {{-- <i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span
                        class="d-none d-sm-inline-block small"></span>
                </button> --}}

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">
                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}"
                                href="{{ route('index') }}">Accueil</a> </li>

                        <!-- Nav item-->
                        <li class="nav-item"> <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}"
                                href="{{ route('about') }}">A Propos</a> </li>

                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link" href="#">Covoiturage</a> </li>

                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link" href="#">Service Routier</a> </li>

                        <!-- Nav item Cabs -->
                        <li class="nav-item"> <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}"
                                href="{{ route('contact.index') }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Profile and Notification START -->
                <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                    <!-- Profile dropdown START -->
                    <li class="nav-item ms-3 dropdown">
                        <!-- Avatar -->
                        <a class="avatar avatar-sm p-2" href="#" id="profileDropdown" role="button"
                            data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @auth
                                <div>
                                    <img class="avatar-img rounded-circle shadow"
                                        src="{{ asset('users/' . Auth::user()->avatar) }}" alt="avatar">
                                </div>
                            @else
                                <i class="fa-solid fa-user rounded-2" style="font-size: 20px; color:dodgerblue"></i>
                            @endauth
                        </a>

                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                            aria-labelledby="profileDropdown">
                            <!-- Vérifiez si l'utilisateur est authentifié -->
                            @auth
                                <!-- Liens pour les utilisateurs authentifiés -->
                                @if (Auth::user()->type === 'conducteur')
                                    <li><a class="dropdown-item" href="{{ route('home') }}">Tableau de bord</a></li>
                                @elseif (Auth::user()->type === 'passager')
                                    <li><a class="dropdown-item" href="{{ route('contact.index') }}">Tableau de bord</a>
                                    </li>
                                @endif
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Déconnexion</button>
                                    </form>
                                </li>
                            @else
                                <!-- Liens pour les invités -->
                                <li><a class="dropdown-item" href="{{ route('register') }}">Inscription</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">Connexion</a></li>
                            @endauth
                        </ul>

                    </li>
                    <!-- Profile dropdown END -->
                </ul>

                <!-- Profile and Notification START -->

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        @yield('content')

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-4">
                    <!-- logo -->
                    <a href="index.html">
                        <img class="h-40px" src="{{ asset('assets/images/logo-light.svg') }}" alt="logo">
                    </a>
                    <p class="my-3 text-body-secondary">Matuacm, une plateforme innovante, rend le covoiturage entre
                        particuliers facile et convivial. Elle relie les conducteurs disposant de places libres à des
                        passagers partageant la même destination, offrant une solution de déplacement écologique et
                        économique. </p>
                    <p class="mb-2"><a href="#" class="text-body-secondary text-primary-hover"><i
                                class="bi bi-telephone me-2"></i>+237 655 299168 / +237 653 335 285</a> </p>
                    <p class="mb-0"><a href="#" class="text-body-secondary text-primary-hover"><i
                                class="bi bi-envelope me-2"></i>contact@matua.cm</a></p>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-8 ms-auto">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-6">
                            <h5 class="text-white mb-2 mb-md-3">Pages</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="{{ route('index') }}">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="{{ route('about') }}">A
                                        Propos</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="#">Covoiturage</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="{{ route('contact.index') }}">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-6">
                            <h5 class="text-white mb-2 mb-md-4">Link</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="#">Inscription</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="#">Connexion</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="#">Police de
                                        confidentialité</a></li>
                                </li>
                                <li class="nav-item"><a class="nav-link text-body-secondary"
                                        href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

            </div><!-- Row END -->

            <!-- Payment and card -->
            <div class="row g-4 justify-content-between mt-0 mt-md-2">

                <!-- Payment card -->
                <div class="col-sm-7 col-md-6 col-lg-4">
                    <h5 class="text-white mb-2">Paiement & Securité</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a href="#"><img
                                    src="{{ asset('assets/images/element/paypal.svg') }}" class="h-30px"
                                    alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img
                                    src="{{ asset('assets/images/element/visa.svg') }}" class="h-30px"
                                    alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img
                                    src="{{ asset('assets/images/element/mobile-money.jpg') }}" class="h-30px"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>

                <!-- Social media icon -->
                <div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
                    <h5 class="text-white mb-2">Suivez-Nous</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i
                                    class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0"
                                href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0"
                                href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0"
                                href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="row">
                <div class="container">
                    <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
                        <!-- copyright text -->
                        <div class="text-body-secondary text-primary-hover"> Copyrights ©2024 Matua.cm. Build by <a
                                href="https://www.th-consulting.com/" class="text-body-secondary">THConsulting</a>.
                        </div>
                        <!-- copyright links-->
                        <div class="nav mt-2 mt-lg-0">
                            <ul class="list-inline text-primary-hover mx-auto mb-0">
                                <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1"
                                        href="#">Police de confidentialité</a></li>
                                <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1"
                                        href="#">Condition générale d'utilisation</a></li>

                                <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1"
                                        href="#">Politique d'annulation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    @stack('js')

</body>

</html>
