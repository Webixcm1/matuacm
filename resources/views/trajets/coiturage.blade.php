@extends('layouts.main')

@section('title')
    Covoiturage - Mutocm - Première plateforme de covoiturage au Cameroun
@endsection

@section('content')
    <!-- ======================= Search START -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Booking from START -->
                    <div class="form-control-bg-light bg-mode border p-4 rounded-3">
                        <div class="row g-4">

                            <!-- Nav tabs START -->
                            <div class="col-lg-6">
                                <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <div class="form-check form-check-inline active" id="cab-one-way-tab"
                                        data-bs-toggle="pill" data-bs-target="#cab-one-way" role="tab"
                                        aria-controls="cab-one-way" aria-selected="true">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadiocab1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadiocab1">Recherche</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs END -->
                        </div>

                        <!-- Tab content START -->
                        <div class="tab-content mt-0" id="pills-tabContent">
                            <!-- One way tab START -->
                            <div class="tab-pane fade show active" id="cab-one-way" role="tabpanel"
                                aria-labelledby="cab-one-way-tab">
                                <form class="row g-4 align-items-center" action="{{ route('trajets.search') }}"
                                    method="GET">
                                    @csrf

                                    <div class="col-xl-10">
                                        <div class="row g-4">
                                            <!-- Pickup -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Départ</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm" name="point_depart">
                                                        <option value="">Départ</option>
                                                        @foreach ($points_depart as $point_depart)
                                                            <option value="{{ $point_depart }}">{{ $point_depart }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Drop -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Destination</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm" name="destination">
                                                        <option value="">Destination</option>
                                                        @foreach ($destinations as $destination)
                                                            <option value="{{ $destination }}">{{ $destination }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6 col-xl-2">
                                                <label class="form-label">Date de départ </label>
                                                <input type="date" class="form-control form-control-lg"
                                                    name="date_depart">
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 col-xl-2">
                                                <label class="form-label">Heure de
                                                    départ</label>
                                                <input type="time" class="form-control text-md-end"
                                                    data-enableTime="true" data-noCalendar="true"
                                                    placeholder="Heure de départ" name="heure_depart">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-2 d-grid mt-xl-auto">
                                        <button type="submit" class="btn btn-lg btn-outline-dark mb-0">Rechercher</button>
                                    </div>
                                </form>
                            </div>
                            <!-- One way tab END -->
                        </div>
                        <!-- Tab content END -->
                    </div>
                    <!-- Booking from END -->
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Search START -->

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

    <!-- =======================Trips list START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-12">
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
                                                <h4 class="card-title mb-2"><a href="{{ route('trips.show', $trajet->id) }}"
                                                        class="stretched-link">
                                                        {{ $trajet->point_depart }} - {{ $trajet->destination }} </a></h4>
                                                <!-- Nav divider -->
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">Publier Par {{ $trajet->conducteur->user->nom }}
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
                                                                class="bi bi-calendar-date-fill me-2"></i>Date de départ :
                                                            {{ \Carbon\Carbon::parse($trajet->date_depart)->format('d M Y') }}</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i
                                                                class="bi bi-alarm-fill me-2"></i>Heure de départ :
                                                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $trajet->heure_depart)->format('H:i') }}</span>
                                                    </li>
                                                    <li class="list-group-item d-flex pb-0 mb-0">
                                                        <span class="h6 fw-normal mb-0"><i
                                                                class="bi bi-people-fill me-2"></i>Nombre de place :
                                                            {{ $trajet->nombre_place }} </span>
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

                {{ $trajets->links() }}
            </div> <!-- Row END -->

        </div>
    </section>
    <!-- ======================= Trips list END -->
@endsection
