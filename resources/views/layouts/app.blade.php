@extends('layouts.main')

@section('title')
    Dashboard Conducteur - Matuacm - Première plateforme de covoiturage au Cameroun
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
@endpush

@section('content')
    <section class="pt-4">
        <div class="container">
            <div class="card rounded-3 border p-3 pb-2">
                <!-- Avatar and info START -->
                <div class="d-sm-flex align-items-center">
                    <div class="avatar avatar-xl mb-2 mb-sm-0">
                        <img class="avatar-img rounded-circle" src="{{ asset(Auth::user()->avatar) }}" alt="">
                    </div>
                    <h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span> {{ Auth::user()->nom }}</h4>

                    <a href="{{ route('trajets.create') }}"
                        class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i
                            class="bi bi-plus-lg fa-fw me-2"></i>Publier Un Trajet</a>
                </div>
                <!-- Avatar and info START -->

                <!-- Responsive navbar toggler -->
                <button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
                    <i class="bi bi-list"></i> Dashboard Menu
                </button>

                <!-- Nav links START -->
                <div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
                    <div class="offcanvas-header border-bottom p-3">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu"
                            aria-label="Close"></button>
                    </div>
                    <!-- Offcanvas body -->
                    <div class="offcanvas-body p-3 p-xl-0">
                        <!-- Nav item -->
                        <div class="navbar navbar-expand-xl">
                            <ul class="navbar-nav navbar-offcanvas-menu">

                                <li class="nav-item"> <a class="nav-link {{ request()->is('trajets*') || request()->is('home*') ? 'active' : '' }}"
                                        href="{{ route('home') }}"><i class="bi bi-house-door fa-fw me-1"></i>Tableau de
                                        bord</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="#"><i
                                            class="bi bi-bookmark-heart fa-fw me-1"></i>Reservations</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="#"><i
                                            class="bi bi-star fa-fw me-1"></i>Reviews</a></li>

                                <li class="nav-item"> <a class="nav-link {{ request()->is('settings*') ? 'active' : '' }}"
                                        href="{{ route('settings.index') }}"><i
                                            class="bi bi-gear fa-fw me-1"></i>Paramètre</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Nav links END -->
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container vstack gap-4">

            @if (Auth::user()->status == false)
                <div class="alert alert-info" role="alert">
                    <i class="bi bi-exclamation-octagon-fill me-2"></i> Veuillez vérifier votre compte pour pouvoir
                    publier un trajet sur Matuacm. <a href="{{ route('verify-account') }}"
                        class="text-info"><strong>Vérifiez-le
                            maintenant</strong></a>.
                </div>
            @endif

            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0">@yield('title1')</h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            @yield('content1')
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
@endpush
