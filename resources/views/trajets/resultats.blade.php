@extends('layouts.main')

@section('title')
    Resultat Recherche - Matuacm - Première plateforme de covoiturage au Cameroun
@endsection

@section('content')
    <!-- =======================
            Search START -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Booking from START -->
                    <div class="form-control-bg-light bg-mode border p-4 rounded-3">
                        <div class="row g-4">
                            <!-- Nav tabs START -->
                            <div class="col-lg-6 d-flex justify-content-center">
                                <h4 class="text-center">Résultats de votre recherche</h4>
                            </div>
                            <!-- Nav tabs END -->
                        </div>
                    </div>
                    <!-- Booking from END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Search START -->

    <!-- =======================Titles START -->
    <section class="pt-6">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                        <!-- Title -->
                        <div class="mb-2 mb-sm-0">
                            <h1 class="fs-3 mb-2">{{ $nombre_trajets }} Trajets Disponibles</h1>
                        </div>

                        <!-- Offcanvas Button -->
                        <button class="btn btn-primary-soft btn-primary-check d-xl-none mb-0" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                        </button>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->

        </div>
    </section>
    <!-- ======================= Titles END -->

    <!-- =======================
                Cab list START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>
            <div class="row">

                <!-- Main content START -->
                <div class="col-lg-12 col-xxl-9">
                    <div class="vstack gap-4">

                        @if ($trajets->isEmpty())
                            <p class="text-center text-black" style="font-size: 20px">Aucun trajet ne correspond à votre
                                recherche.</p>
                        @else
                            @foreach ($trajets as $trajet)
                                <!-- Cab item START -->
                                <div class="card border p-4">
                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <div class="row g-2 g-sm-4 mb-4">
                                            <!-- Card image -->
                                            <div class="col-md-4 col-xl-3">
                                                <div class="bg-light rounded-3 px-4 py-5">
                                                    <img src="{{ asset($trajet->image) }}" alt="">
                                                </div>
                                            </div>

                                            <!-- Card title and rating -->
                                            <div class="col-sm-6 col-md-4 col-xl-6">
                                                <h4 class="card-title mb-2"><a href="#" class="stretched-link">
                                                        {{ $trajet->point_depart }} - {{ $trajet->destination }} </a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">Par {{ $trajet->conducteur->user->nom }}
                                                        {{ $trajet->conducteur->user->prenom }} </li> &nbsp;
                                                    @if ($trajet->status)
                                                        <li class="badge text-bg-success"><i
                                                                class="fas fa-circle me-2 small fw-bold"></i>
                                                            {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </li>
                                                    @else
                                                        <li class="badge text-bg-danger"><i
                                                                class="fas fa-circle me-2 small fw-bold"></i>
                                                            {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </li>
                                                    @endif
                                                </ul>

                                                <!-- Rating Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item h6 fw-normal me-1 mb-0">4.5</li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i
                                                            class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i
                                                            class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>

                                            <!-- Button -->
                                            <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                                <!-- Price -->
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item h5 mb-0">XAF {{ $trajet->prix }}</li>
                                                </ul>
                                                <a href="#" class="btn btn-dark mb-0">Reserver</a>
                                                <a href="#" class="btn btn-outline-dark mb-0">Chater</a>
                                            </div>
                                        </div> <!-- Row END -->
                                    </div>
                                    <!-- Card body END -->

                                    <!-- Card footer START -->
                                    <div class="card-footer border-top p-0 pt-3">
                                        <div class="row">
                                            <!-- List -->
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless mb-0">
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i
                                                                class="bi bi-calendar-date-fill me-2"></i>Date de départ : {{ \Carbon\Carbon::parse($trajet->date_depart)->format('d M Y') }}</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i
                                                                class="bi bi-alarm-fill me-2"></i>Heure de départ : {{ \Carbon\Carbon::createFromFormat('H:i:s', $trajet->heure_depart)->format('H:i') }}</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i
                                                                class="bi bi-people-fill me-2"></i>Nombre de place : {{$trajet->nombre_place}} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card footer END -->
                                </div>
                                <!-- Cab item END -->
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
                Cab list END -->
@endsection
