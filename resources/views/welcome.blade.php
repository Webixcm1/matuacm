@extends('layouts.main')

@section('title')
    Accueil - Matuacm - Première plateforme de covoiturage au Cameroun
@endsection

@section('content')
    <!-- ======================= Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 ms-auto position-relative">
                    <img src="{{ asset('assets/images/bg/img/car2.jpg') }}" class="rounded-3" alt="">

                    <!-- Search START -->
                    <div class="col-11 col-sm-10 col-lg-8 col-xl-6 position-lg-middle ms-lg-8 ms-xl-7">
                        <div class="card shadow pb-0 mt-n7 mt-sm-n8 mt-lg-0">

                            <!-- Card header -->
                            <div class="card-header border-bottom p-3 p-sm-4">
                                <h5 class="card-title mb-0">Réservez votre place en covoiturage</h5>
                            </div>

                            <!-- Card body START -->
                            <form class="card-body form-control-border p-3 p-sm-4" action="{{ route('trajets.search') }}" method="GET">

                                <!-- Tabs content START -->
                                <div class="tab-content my-4" id="pills-tabContent">
                                    <!-- One way START -->
                                    <div class="tab-pane fade show active" id="cab2-one-way" role="tabpanel"
                                        aria-labelledby="cab2-one-way-tab">
                                        <div class="row g-2 g-md-4">
                                            <!-- Pickup -->
                                            <div class="col-md-6 position-relative">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Départ</label>
                                                    <select class="form-select js-choice" data-search-enabled="true" name="point_depart">
                                                        <option value="">Départ</option>
                                                        @foreach ($points_depart as $point_depart)
                                                            <option value="{{ $point_depart }}">{{ $point_depart }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Auto fill button -->
                                                <div class="btn-flip-icon z-index-9 mt-2 mt-md-1">
                                                    <button class="btn btn-dark shadow btn-round mb-0"><i
                                                            class="fa-solid fa-right-left"></i></button>
                                                </div>
                                            </div>

                                            <!-- Drop -->
                                            <div class="col-md-6 text-md-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Destination</label>
                                                    <select class="form-select js-choice" data-search-enabled="true" name="destination">
                                                        <option value="">Destination</option>
                                                        @foreach ($destinations as $destination)
                                                            <option value="{{ $destination }}">{{ $destination }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small">Date de départ</label>
                                                    <input type="date" class="form-control"
                                                        placeholder="Date de départ" name="date_depart">
                                                </div>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 text-md-end">
                                                <div class="form-fs-lg form-control-transparent">
                                                    <label class="form-label small ms-3 ms-md-0 me-md-3">Heure de
                                                        départ</label>
                                                    <input type="time" class="form-control text-md-end"
                                                        data-enableTime="true" data-noCalendar="true"
                                                        placeholder="Heure de départ" name="heure_depart">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- One way END -->
                                </div>
                                <!-- Tabs content END -->

                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary mb-0">Rechercher</button>
                                </div>

                            </form>
                            <!-- Card-body END -->
                        </div>
                    </div>
                    <!-- Search END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- ======================= Main Banner END -->

    <!-- =======================  Why Choose Us START -->
    <section class="pt-0 pt-xl-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 text-center">
                    <h2>Pourquoi choisir <strong>Matuacm</strong>?</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i
                                class="bi bi-lightbulb-fill fs-5"></i></div>
                        <h5>Simplicité et Convivialité</h5>
                        <p class="mb-0">La plateforme est conçue pour être facile à utiliser. Les utilisateurs peuvent
                            rapidement rechercher des trajets, réserver des places et publier des offres de covoiturage,
                            tout en profitant de la convivialité des trajets partagés. </p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i
                                class="bi bi-record-btn-fill fs-5"></i></div>
                        <h5>Économies Significatives</h5>
                        <p class="mb-0"> Matuacm permet de partager les coûts de déplacement, ce qui rend les voyages
                            plus abordables pour tous les passagers. Les conducteurs peuvent également réduire leurs frais
                            de carburant en partageant les trajets avec d'autres.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-circle mb-4"><i
                                class="bi bi-shield-fill-check fs-5"></i></div>
                        <h5>Sécurité et Confiance </h5>
                        <p class="mb-0">Matuacm met un fort accent sur la sécurité avec des fonctionnalités telles que la
                            vérification de l'identité, des antécédents et des coordonnées des utilisateurs. Les avis et
                            évaluations permettent de choisir des conducteurs et des passagers de confiance.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-4"><i
                                class="fa-solid fa-flag fs-5"></i></div>
                        <h5>Assistance Routière </h5>
                        <p class="mb-0">En cas de panne ou d'accident pendant le trajet, Matuacm offre un service
                            d'assistance routière, avec la possibilité de contacter les services d'urgence, assurant ainsi
                            une tranquillité d'esprit pour tous les participants.</p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-4"><i
                                class="fa-solid fa-headset fs-5"></i></div>
                        <h5>Service Client Réactif</h5>
                        <p class="mb-0">Matuacm propose un service client efficace et réactif pour répondre aux questions
                            et résoudre les problèmes des utilisateurs, garantissant une expérience utilisateur positive.
                        </p>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4">
                    <!-- Card START -->
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-4"><i
                                class="fa-solid fa-dollar fs-5"></i></div>
                        <h5>Paiement Sécurisé</h5>
                        <p class="mb-0">Le système de paiement en ligne sécurisé de Matuacm facilite les transactions
                            entre les conducteurs et les passagers, garantissant que les paiements sont effectués de manière
                            sûre et fiable.</p>
                    </div>
                    <!-- Card END -->
                </div>

            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
                                                                                                            Why Choose Us END -->

    <!-- =======================
                                                                                                            Action box START -->
    <section class="pt-0 pt-lg-10">
        <div class="container position-relative">
            <!-- Mockup -->
            <div class="position-absolute bottom-0 end-0 z-index-99 me-0 d-none d-lg-block">
                <img src="{{ asset('assets/images/bg/img/car.png') }}" class="h-400px py-3" alt="matuacm">
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="bg-light rounded-2 position-relative overflow-hidden p-4 p-sm-5">
                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 start-0 mb-n1">
                            <svg class="fill-primary" width="77px" height="77px">
                                <path
                                    d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-50 translate-middle ms-9">
                            <svg class="fill-warning" width="191.7px" height="211px" viewBox="0 0 191.7 211">
                                <path
                                    d="M183.4,105.8c0-0.8-0.1-1.4-0.2-2c-0.2-1-0.5-2-0.8-3c-0.3-1.5-1-2.9-1.5-4.3c-0.2-0.5-0.3-1-0.6-1.4 c-0.3-0.4-0.5-0.9-0.7-1.4c0-0.1-0.1-0.2-0.3-0.1c0.1,0.2,0,0.4,0.2,0.7c0.5,1.1,0.9,2.2,1.3,3.3c0.5,1.2,0.8,2.4,1.2,3.6 c0.2,0.7,0.4,1.3,0.6,2C182.7,104,182.8,104.9,183.4,105.8 M120.9,62.4c0.3,0,0.5,0.3,0.8,0.2c0.4-0.1,0.6-0.4,1-0.6 c0.5-0.3,0.6-0.7,0.6-1.2c0-0.4,0.3-0.3,0.5-0.4c0-0.8,0-1.6-0.8-2.2C122.4,59.6,121.1,60.7,120.9,62.4 M148.7,166.5 c-1.9,0.9-5.9,4.1-6.5,5.8c0.5-0.3,1.1-0.4,1.2-1c0.1-0.2,0.4-0.4,0.6-0.6c0.2-0.3,0.6,0,0.9-0.3c0.2-0.3,0.7-0.5,0.9-0.8 c0.2-0.5,0.7-0.5,1-0.8c0.2-0.3,0.5-0.7,0.9-0.8c0.4-0.2,0.4-0.7,0.9-0.7c0.5,0,0.4-0.7,0.8-0.6c0.4-0.5,1.1-0.7,1.5-1.2 c0.1-0.2,0.2-0.3,0-0.5c-0.5,0.1-0.9,0.5-1.3,0.8c-0.3,0-0.4-0.4-0.7-0.2c0,0-0.1,0-0.1,0.1C148.7,165.8,148.7,166.1,148.7,166.5  M159,171.3c-1.2,0.4-1.8,1.5-2.8,2.1c-1,0.6-1.9,1.4-2.9,2.2c-1,0.8-1.9,1.6-2.8,2.4c0.2,0.1,0.4,0.1,0.6,0 c0.7-0.7,1.8-0.6,2.3-1.5c0.7,0,1-0.6,1.4-0.9c0.3-0.3,0.7-0.4,1-0.4c0.3-0.5,0.6-0.8,1-1c0.4-0.2,0.6-0.7,1.1-0.8 c-0.3-0.7-0.3-0.7,0.7-1c0-0.2-0.3-0.2-0.2-0.5C158.6,171.7,158.8,171.5,159,171.3 M127.8,135.8c1.4-1.9,2.6-3.9,3.7-5.9 c1.3-2.5,2.5-5,3.8-7.4c0.1-0.3,0.2-0.5,0-0.8c-2.7,4.5-5,9.1-7.4,13.6C127.7,135.4,127.8,135.6,127.8,135.8 M38.9,72.2 c-0.4,0.4-0.8,0.8-1.2,1.2c-0.3,0.4-0.8,0.7-1.1,1.1c-0.5,0.5-0.8,1.2-1.3,1.7c-1,1-1.9,2.1-2.8,3.2c-1.4,1.7-2.4,3.7-3.6,5.6 c-0.3,0.4-0.5,0.9-0.7,1.4c3.7-4.5,6.8-9.5,10.8-13.8C39.1,72.5,39,72.3,38.9,72.2 M94.1,198.1c0.1,0.4,0.1,0.6,0.2,0.8 c-0.6,0-0.2,0.9-0.9,1c-0.7,0-1.4-0.1-2.2,0.2c-0.4,0.1-0.3,0.3-0.2,0.5c0.6,0,1.2,0.1,1.6-0.3c0.3,0.1,0.1,0.4,0.4,0.5 c0.8,0,1.6,0.2,2.3,0c0.8-0.3,1.5-0.1,2.2-0.2c0.8,0,1.5,0,2.3,0c0.2,0,0.4,0,0.6,0c0.1,0,0.1-0.1,0.2-0.1c0-0.2,0.1-0.4,0-0.6 c-0.7,0.3-0.7,0.2-1.2-0.2c-0.3-0.2,0-0.4,0-0.5c-0.1-0.4-0.6-0.2-0.9-0.4c-0.2-0.1,0.2-0.5-0.2-0.6c-0.2,0.4,0.2,0.9-0.4,1.2 c-0.6-0.3-0.6-0.3-1.1,0.4c0,0.3,0.5,0,0.5,0.4c-0.3,0-0.6,0.2-0.7-0.3c0-0.2-0.5-0.3-0.6-0.4c-0.3,0-0.3,0.3-0.5,0.2 c-0.3-0.2-0.3-0.6-0.5-0.8c0.1-0.2,0.4-0.3,0.4-0.5c-0.4-0.2-0.5,0.3-0.8,0.2C94.4,198.4,94.3,198.3,94.1,198.1 M101.9,167.3 c0-0.9,0.6-1.5,0.8-2.3c0.2-1,0.6-2,0.8-2.9c0.2-0.8,0.5-1.7,0.6-2.5c0.2-0.9,0.5-1.7,0.7-2.6c0.2-0.9,0.4-1.8,0.7-2.7 c0.2-0.5,0.4-1,0.5-1.5c0.1-0.6,0.2-1.2,0.5-1.7c0.3-0.5,0-1.3,0.7-1.7c0.2-0.1,0.1-0.4,0-0.6c0-0.1-0.2-0.2-0.1-0.3 c0.5-0.5,0.3-1.2,0.6-1.8c-0.2,0-0.4,0-0.5,0.3c-0.4,1.3-0.9,2.6-1.4,3.9c-0.1,0.5-0.4,0.9-0.3,1.4c-0.6,1-0.7,2.1-0.9,3.1 c-0.2,1.1-0.6,2.1-0.8,3.2c-0.6,2.3-1.1,4.7-1.9,7C102.1,166.1,101.4,166.6,101.9,167.3 M23.2,154c-0.1-0.3-0.2-0.6-0.4-0.8 c-0.1-0.1-0.3-0.1-0.4-0.3c-0.3-1.1-0.6-2.1-1-3.1c-0.2-0.5-0.3-1.1-0.7-1.5c-1.1-1.2-2.1-2.4-3.2-3.7c-0.1-0.1-0.3-0.2-0.3-0.4 c0-0.3-0.3-0.4-0.4-0.5c-0.1-0.1-0.2-0.4-0.6-0.4c0.7,1.7,1.6,3.2,2.5,4.7c0.9,1.4,1.7,2.9,2.7,4.2c0.4,0.6,0.8,1.3,1.1,2 c0,0.1,0.2,0.1,0.2,0.2C23,154.2,23.1,154.1,23.2,154 M90.5,85.8c0.5-0.1,0.4-0.6,0.7-0.8c0.3-0.2,0.5-0.6,0.8-0.9 c0.9-1.2,1.8-2.4,2.8-3.6c0.7-0.9,1.4-1.7,2-2.6c0.6-0.9,1.4-1.7,1.9-2.6c0.5-0.9,1.4-1.5,1.7-2.5c-0.6-0.4-1-0.4-1.5,0.1 c-0.7,0.8-1.3,1.7-1.9,2.5c-0.4,0.6-0.8,1.2-1.2,1.8c-0.9,1.1-1.6,2.3-2.4,3.5c-0.9,1.4-1.8,2.9-2.8,4.3 C90.5,85.3,90.4,85.5,90.5,85.8 M140.6,176.1c0.5-0.5,1.1-0.7,1.7-1c0.7-0.4,1.3-0.8,1.9-1.2c0.3-0.1,0.2-0.6,0.6-0.5 c0.6-1.2,1.7-1.9,2.8-2.7c0.1,0.1,0.3,0.2,0.4,0.3c0.1-0.1,0.2-0.2,0.3-0.3c-0.1-0.1-0.2-0.2-0.2-0.3c0.2-0.3,0.6,0.1,0.7-0.3 c-0.1-0.1-0.3-0.1-0.4-0.2c0-0.7,0-0.7,0.7-0.9c0.1,0,0.2-0.1,0.2-0.2c0-0.2-0.2-0.3-0.2-0.4c0.1-0.3,0.7-0.4,0.4-0.8 c-0.8,0.3-1.2,0.9-1.8,1.4c-0.7,0.5-1.4,1-2,1.6c-0.6,0.6-1.2,1.1-1.9,1.6c-0.7,0.6-1.5,1.1-2.2,1.7c-0.2,0.2-0.4,0.6-0.7,0.7 c-0.4,0.1-0.6,0.4-0.8,0.6c-0.3,0.3-0.5,0.5-0.8,0.8C139.7,176.4,140.2,175.5,140.6,176.1 M130.5,206.4c0.2,0.2,0.5,0.1,0.7,0 c1-0.4,2-0.7,3-1.1c1.8-0.6,3.5-1.4,5.2-2.2c2.9-1.3,5.8-2.8,8.5-4.4c1.2-0.7,2.3-1.4,3.5-2.2c1.2-0.8,2.4-1.7,3.6-2.6 c1.2-0.8,2.2-1.7,3.3-2.6c0.9-0.7,1.7-1.6,2.7-2.2c0.2-0.1,0.4-0.3,0.5-0.5c0.2-0.2,0.4-0.3,0.5-0.5c-0.3-0.2-0.4,0-0.5,0.1 c-0.5,0.6-1.1,1-1.7,1.4c-1.4,1-2.7,2.2-4.1,3.2c-0.7,0.6-1.5,1.2-2.2,1.7c-1.8,1.1-3.4,2.3-5.2,3.3c-2.4,1.4-4.8,2.7-7.2,4.1 c-0.6,0.3-1.2,0.4-1.8,0.7c-1.2,0.7-2.5,1.3-3.8,1.8c-1,0.3-1.9,0.9-2.9,1.2C131.8,205.8,131.1,206,130.5,206.4 M10.6,79.8 c0.1-0.1,0.3-0.3,0.4-0.4c-0.3-0.2-0.3-0.5-0.4-0.8c0.2-0.5,0.8,0.1,0.9-0.5c-0.1-0.2-0.4,0-0.5-0.3c-0.1-0.4,0.2-0.7,0.4-1 c0.2-0.1,0.4,0.1,0.6-0.1c-0.2-0.3-0.4-0.5-0.1-0.8c0.4-0.6,0.6-1.5,1.2-1.9c0.2-0.2,0.1-0.5,0.4-0.7c-0.2-0.6,0.3-1,0.5-1.4 c0.8-1.4,1.6-2.8,2.4-4.1c1.2-1.8,2.3-3.5,3.6-5.2c0.9-1.1,1.7-2.4,2.8-3.4c0.2-0.2,0.2-0.3,0-0.4c-4.4,3.8-7.5,8.7-10,13.9 c-0.2-0.2-0.3-0.3-0.5-0.2c-0.2,0.4-0.3,0.8-0.6,1.2c-0.3,0.5-0.3,0.8,0,1.2c-0.2,0.5-0.5,0.9-0.6,1.2c-0.2,0-0.5,0-0.5,0.1 c-0.3,0.6-0.8,1.1-0.6,1.8c-0.5,0-0.5,0.5-0.7,0.7c0.2,0.4-0.6,0.7-0.1,1.2c0.3,0.4,0.1,0.7-0.3,0.9c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0.4-0.5,0.5-0.3,0.9c0.2,0.2,0.3-0.3,0.5,0C8.6,82,8.4,82.7,8,83.3c-0.2,0.4-0.2,0.7-0.1,1.1c0.3-0.5,0.3-1,0.9-1.2 c-0.2-0.2-0.4-0.3-0.1-0.6c0.2-0.3,0.5-0.2,0.8-0.3c0.1,0,0.1-0.1,0.1-0.2c-0.1-0.1-0.3-0.1-0.5-0.2c0.5-0.9,0.8-1.8,1.4-2.6 C10.5,79.6,10.5,79.7,10.6,79.8 M21.4,74.7c0.9-0.5,1.3-1.4,2-2c0.5-0.5,1-1.2,1.5-1.8c0.5-0.7,1.1-1.2,1.6-1.9 c0.7-1,1.5-1.9,2.3-2.8c0.2-0.2,0.5-0.4,0.7-0.7c0.3-0.7,1-1.1,1.5-1.7c0.5-0.6,0.8-1.3,1.4-1.7c0.2-0.1,0.4-0.1,0.5-0.4 c0.7-1,1.8-1.7,2.4-2.8c0.5-0.1,0.5-0.6,0.8-0.9c0.3-0.3,0.6-0.6,0.9-0.9c-0.6-0.3-0.7,0.3-1,0.4c-1.2,0.7-2.3,1.5-3.4,2.5 c-2,1.8-3.8,3.9-5.5,6c-0.4,0.5-0.9,1-1.3,1.5c-1.3,1.8-2.6,3.7-3.9,5.6C21.8,73.6,21.6,74,21.4,74.7 M65.2,30.8 c-0.5-0.4-0.8-0.2-1.1,0.1v0.8c-0.7,0-0.6,1-1.2,1.3c-0.6,0.2-1,0.8-1.4,1.3c0.1,0.3,0.5,0.1,0.6,0.4c0.4-0.4,0.7-0.9,1.3-0.8v-0.6 c0.5-0.1,0.8-0.5,1.1-0.8c0.3-0.3,0.9-0.3,0.9-0.9c0.6,0.1,0.6-0.6,1-0.8c0.4-0.2,0.7-0.6,1-0.9c0.3-0.3,0.6-0.8,0.9-1.1 c0.3-0.3,0.5-0.7,0.9-1c0.4-0.3,0.9-0.4,1-0.9c0.2-0.5,0.6-0.7,1-0.9c-0.2-0.8,0.4-0.8,1-0.9c-0.1-0.1-0.2-0.2-0.2-0.2 c0-0.3,0.3-0.1,0.4-0.3c0.2-0.5,0.5-1.1,1-1.4c0.6-0.3,0.8-0.9,1.3-1.3c1.7-1.7,3.4-3.3,5.2-4.9c0.1-0.1,0.2-0.3,0.4-0.3 c0.8-0.2,1.2-0.8,1.8-1.3c0.6-0.5,1.2-1.1,1.8-1.5c1-0.6,1.9-1.2,2.7-2c0.2,0.1,0.2,0.2,0.3,0.2c0.5-0.4,0.8-1,1.3-1.1 c0.6-0.1,0.8-0.6,1.4-1c-1.2,0.1-1.2,0.1-1.8,0.7c-0.4-0.3-0.8,0.3-1.2,0c-0.1,0.4,0,1-0.8,1c-0.1,0-0.3,0.1-0.3,0.2 c-0.3,0.8-1.1,1-1.7,1.4c-0.5,0.4-1,0.8-1.6,0.6c-0.3,0.6-0.6,1-1.1,1.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0.3-0.3,0.6-0.4,0.9 c-0.4,0-0.8,0.2-1.1,0.4v0.5c-0.4,0.1-0.6,0.3-0.8,0.6c-0.2,0.2-0.6,0.2-0.7,0.7c-0.1,0.3-0.5,0.5-0.7,0.8c-0.3,0.1-0.6-0.1-0.9,0.1 c0.2,0.1,0.4,0.1,0.7,0.3c-0.7,0-0.7,0.5-0.9,0.8c-0.5,0.4-0.9,0.9-1.4,1.4c0.2,0.5-0.5,0.2-0.5,0.6c0,0.5-0.6,0-0.7,0.4 c0.1,0.1,0.1,0.2,0.1,0.1c-0.6,0.6-1.1,1.1-1.7,1.7c-0.1,0.2-0.2-0.3-0.4-0.1c-0.3,0.3,0.6,0.5,0.1,0.8c-0.2,0-0.2-0.3-0.4-0.1 c-0.1,0.2,0.1,0.5-0.2,0.7c-0.1-0.2-0.3-0.3-0.4-0.3C70,25,70,25.1,70,25.2c0,0.5-0.1,1-0.7,1.2c0,0.5-0.5,0.5-0.8,0.8 c-0.2,0.3-0.6,0.5-0.8,0.9C67.1,29.1,66,29.8,65.2,30.8 M1.2,100.8c-0.3-0.2-0.3-0.6-0.2-0.9c0.6-1.7,0.8-3.5,1.3-5.2 C2.6,93.9,2.8,93,3,92c0.1-0.8,0.5-1.4,0.6-2.2C3.7,89,4,88.2,4.2,87.4c0.2-0.7,0.5-1.3,0.7-2c0.3-1,0.6-2,1-3 c0.2-0.6,0.4-1.3,0.8-1.8c0.1-0.1,0.1-0.3,0.1-0.4c0.2-0.6,0.4-1.2,0.7-1.8c0.6-1.2,1.1-2.5,1.7-3.7c0.5-0.9,0.9-1.8,1.3-2.6 c0.4-0.8,0.8-1.7,1.3-2.5c1-1.9,2.2-3.8,3.5-5.6c1-1.4,2.1-2.7,3.2-4c0.9-1.1,1.8-2.1,2.9-3c0.8-0.7,1.6-1.6,2.5-2.2 c0.8-0.6,1.7-1.3,2.5-1.9c1.9-1.4,3.9-2.8,5.9-4.1c1.2-0.8,2.4-1.5,3.6-2.3c1.4-0.9,2.8-1.6,4.2-2.5c0.8-0.5,1.7-1,2.6-1.4 c0.8-0.5,1.7-0.8,2.5-1.3c0.8-0.5,1.7-0.9,2.5-1.3c0.8-0.4,1.5-1,2.5-1.1c0.4-0.7,1.2-0.7,1.8-1c0.6-0.3,1.2-0.6,1.8-1 c0.6-0.4,1.2-0.7,1.8-1.1c1.2-0.7,2.3-1.5,3.5-2.2c0.7-0.4,1.2-1.1,1.9-1.5c1.3-0.9,2.4-2,3.5-3.1c0.4-0.5,0.9-0.9,1.4-1.2 c0.4-0.2,0.4-0.7,0.8-1c0.6-0.5,1-1,1.6-1.5c0.2-0.2,0.3-0.3,0.3-0.6c0.3,0,0.4,0,0.6-0.1c0.2-0.2-0.1-0.2-0.1-0.3 c0.2-0.2,0.3-0.5,0.7-0.6c0.3-0.1,0.3-0.5,0.5-0.7c0.6-0.4,0.7-1.3,1.5-1.5c0.2-0.7,0.8-1.1,1.2-1.7c0.2-0.3,0.5-0.5,0.8-0.6 c0.3-0.1,0.1-0.7,0.6-0.6c0.5-1.1,1.6-1.6,2.4-2.3c1.4-1.2,2.6-2.4,4.2-3.4c0.8-0.5,1.5-1.2,2.2-1.7c1.8-1.1,3.5-2.3,5.4-3.2 c0.8-0.4,1.5-0.9,2.3-1.3c1.7-0.8,3.3-1.5,5.1-2.2c0.3-0.1,0.6-0.3,1-0.2c0.4,0.1,0.6-0.4,0.9-0.5c0.4-0.1,0.9-0.1,1.3-0.3 c0.2-0.1,0.7-0.2,1-0.3c0.9-0.5,2-0.4,2.9-0.9c0.3-0.2,0.8-0.1,1.1-0.1c1.2-0.1,2.4-0.7,3.6-0.6c0.7,0,1.3-0.1,1.9-0.4 c0.2-0.1,0.4-0.2,0.6-0.1c0.6,0.2,1.1,0,1.6,0c0.6,0,1.1-0.3,1.7-0.2c0.6,0,1.3,0.2,1.8,0c1-0.3,2-0.2,3-0.2c0.5,0,1-0.2,1.5,0.2 c0.2,0.2,0.5-0.5,0.8-0.1c0.2,0.2,0.5,0.2,0.7,0c0.3-0.1,0.6,0.3,0.8,0.1c0.2-0.2,0.6-0.4,0.7-0.2c0.2,0.4,0.6-0.1,0.7,0.2 c0,0,0.1,0,0.1,0c1.1-0.1,2.1,0.3,3.2,0.3c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.3,1.8,0.4c1,0.2,2,0.6,3,0.8c0.3,0,0.3,0.7,0.8,0.3 c0.2,0.4,0.6,0.1,0.9,0.2c0.2,0.1,0.4,0.3,0.6,0.5c0.6-0.1,1.1,0.2,1.7,0.4c1.1,0.4,2.2,0.9,3.3,1.5c1.4,0.8,2.9,1.5,4.1,2.8 c0.2,0.3,0.5,0,0.8,0.2c1.3,1.2,2.8,2.2,3.9,3.6c0.5,0.6,1.2,1,1.7,1.6c1,1.2,2.1,2.3,3,3.6c0.5,0.8,1.1,1.6,1.7,2.4 c1.1,1.7,2.1,3.4,2.8,5.3c0.5,1.4,1,2.8,1.4,4.3c0.1,0.5,0.1,1,0.2,1.5c0.2,0.5,0.2,0.9,0.2,1.4c0,0.4,0.3,0.6,0.3,1 c-0.1,0.3-0.1,0.7,0.2,1c0.1,0.2,0,0.5,0,0.8c0,0.4,0.1,0.8,0,1.2c-0.1,0.3,0.4,0.6,0,0.9c0.4,0.3,0.2,0.7,0.2,1.1 c0,0.4,0,0.7,0,1.1v1.2c0,0.4-0.1,0.8,0,1.1c0.2,0.6,0.1,1.3,0.2,1.9c0.1,0.7,0.1,1.5,0,2.2c0,0.6,0.4,1.2,0.3,1.9 c-0.1,0.6-0.2,1.3,0,1.9c0.2,0.7,0,1.4,0.3,2c0.3,0.7,0,1.4,0.2,2c0.4,1.4,0.4,2.8,0.8,4.2c0.5,1.7,0.7,3.5,1.3,5.2 c0.4,1.1,0.8,2.2,1.1,3.3c0.4,1.1,0.9,2.1,1.5,3.2c0.7,1.3,1.5,2.5,2.4,3.6c0.9,1.2,1.9,2.2,2.8,3.3c0.4,0.5,0.9,1,1.3,1.5 c0.4,0.6,1.1,1,1.5,1.6c1.1,1.5,2.5,2.6,3.5,4.2c1.7,1.6,2.7,3.6,4.1,5.4c0.7,0.9,1.2,1.9,1.7,2.9c1,1.6,1.8,3.3,2.6,5 c0.8,1.6,1.4,3.2,1.9,4.8c0.4,1.2,0.7,2.4,1.1,3.6c0.2,0.5-0.1,1,0.3,1.4c0,1.1,0.6,2.2,0.5,3.3c0.4,0.7,0.3,1.4,0.2,2.1 c0,0.5,0.4,0.9,0.3,1.5c-0.1,0.5-0.2,1.1,0,1.6c0.3,0.8,0.2,1.7,0.2,2.5c0,1.9,0,3.8,0,5.7c0,0.6,0.2,1.3-0.1,1.9 c-0.3,0.5,0.1,1.2-0.3,1.7c-0.1,0.2,0.2,0.3,0.2,0.6c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.4,0.1,1-0.3,1.5c-0.2,0.3,0.6,0.7,0,1 c0.1,0.7-0.1,1.3-0.2,2c-0.1,0.5,0.2,1.1-0.2,1.6c-0.3,0.5,0.2,1.1-0.3,1.6c0.2,0.8-0.3,1.5-0.3,2.3c0,0.6-0.2,1.2-0.3,1.8 c-0.2,0.9-0.4,1.9-0.6,2.8c-0.1,0.3-0.2,0.7-0.3,1c-0.1,0.2-0.3,0.3-0.3,0.5c0,1.5-0.5,2.9-1,4.3c-0.3,0.8-0.5,1.7-0.9,2.6 c-0.1,0.2-0.1,0.6-0.3,0.8c-0.5,0.6-0.7,1.4-0.9,2.2c-0.1,0.4-0.3,0.8-0.5,1.1c0,0.1-0.2,0.1-0.2,0.2c0,1.1-0.7,1.9-1.1,2.8 c-0.4,0.9-1,1.7-1.3,2.6c-0.8,1.8-1.9,3.4-2.7,5.2c-0.3,0.6-0.7,1.1-0.9,1.5c-0.1,0.4,0.2,0.4,0.2,0.8c-0.1,0.3-0.3,0.4-0.7,0.5 c0.2,0.9-0.5,1.5-0.9,2.1c-0.9,1.6-1.9,3.1-3,4.6c-0.7,1-1.4,2-2.2,2.9c-2.6,2.9-5.3,5.6-8.1,8.3c-1.1,1-2.1,2.1-3.3,3 c-1,0.8-1.9,1.7-2.9,2.4c-2.3,1.8-4.7,3.5-7.1,5.1c-1.9,1.2-3.8,2.3-5.8,3.4c-1.2,0.7-2.5,1.4-3.8,1.9c-2.1,1-4.2,1.9-6.3,2.7 c-2,0.8-4.1,1.2-6.1,2.1c-1.3,0-2.5,0.8-3.8,0.8c-0.6,0.4-1.3,0.3-1.9,0.4c-0.6,0.1-1.3,0.4-2,0.3c-0.3,0-0.6,0.3-1,0.2 c-0.3-0.1-0.7-0.1-1,0.2c-0.3-0.4-0.5,0.2-0.8,0.1c-0.3-0.1-0.8-0.1-1.1,0c-0.8,0.3-1.6,0-2.3,0.3c-0.8,0.3-1.5,0-2.2,0.2 c-0.9,0.3-1.7-0.2-2.5,0c-0.1,0-0.2-0.1-0.3-0.2c-0.2,0.1-0.1,0.3-0.2,0.4c-0.3-0.2-0.5-0.4-0.8-0.4c-0.3-0.1-0.7,0-1.2,0 c-0.2,0.2-0.4,0.5-0.6,0.8c-0.5-0.1-0.9,0.1-1.3-0.2c-0.2-0.1-0.6,0.1-0.9,0.1c-0.4,0.1-0.8-0.4-1.1-0.2c-0.4,0.3-0.8,0.2-1.2,0.2 c-3.5,0-7.1,0-10.6,0c-0.4,0-0.8,0.2-1.1-0.2c-0.4,0.6-0.7-0.1-1.1,0c-0.4,0.1-0.7-0.1-1.1-0.2c-0.6-0.2-1.4,0-2.1-0.1 c-0.5,0-0.9,0.1-1.4-0.2c-0.4-0.2-0.9-0.1-1.4-0.2c-0.6-0.1-1.2-0.3-1.8-0.3c-0.4,0-0.8,0-1.3-0.2c-0.3-0.2-0.8,0.1-1.1-0.3 c-0.8,0-1.6-0.3-2.4-0.5c-1.9-0.4-3.7-1-5.6-1.6c-1.5-0.5-3.1-1-4.6-1.6c-0.5-0.2-1-0.4-1.5-0.6c-1.7-0.8-3.5-1.5-5.1-2.4 c-1.4-0.8-2.9-1.6-4.3-2.5c-0.7-0.5-1.6-0.8-2.4-1.3c-1.8-1.1-3.7-2.2-5.4-3.4c-1.5-1.1-3.1-2.1-4.4-3.4c-0.3-0.4-0.8-0.6-1.2-0.9 c-0.4-0.4-0.8-0.9-1.2-1.2c-0.6-0.4-1.1-1-1.6-1.4c-0.4-0.3-0.4-1-1.1-1.2c-0.5-0.1-0.5-0.9-1.1-1.1c-0.2-0.8-1-0.9-1.4-1.6 c-0.4-0.7-1-1.1-1.6-1.7c-0.5-0.5-1.2-1-1.6-1.7c-0.9-1.1-2-2-2.8-3.1c-0.8-1-1.9-1.9-2.5-3.1c-0.1-0.3-0.4-0.2-0.6-0.3 c-0.2-0.2-0.1-0.4-0.3-0.6c-0.7-0.7-1.3-1.4-2-2.2c-0.9-1.1-1.7-2.2-2.6-3.3c-1.4-1.7-2.6-3.5-3.8-5.3c-0.8-1.2-1.5-2.4-2.3-3.6 c-0.9-1.4-1.7-2.8-2.6-4.2c-0.6-1.1-1.2-2.2-1.8-3.3c-0.5-0.9-1-1.7-1.5-2.5c-0.7-1.2-1.4-2.3-2.1-3.5c-1-1.6-1.9-3.3-2.8-5.1 c-0.4-0.9-0.8-1.8-1.2-2.7c-0.2-0.6-0.4-1.2-0.7-1.8c-0.6-1.1-0.8-2.4-1.2-3.5c-0.1-0.4-0.2-0.8-0.3-1.2c-0.1-0.4-0.2-0.7-0.2-1.1 c-0.2-1.1-0.2-2.3-0.7-3.4c0-0.1,0-0.2,0-0.2c0.1-1.3-0.4-2.5-0.3-3.8c0.1-1.1-0.4-2.3-0.2-3.4c-0.4-0.7-0.1-1.4-0.3-2.1 c-0.4-1.8-0.2-3.7-0.2-5.5c0-1.8,0-3.7,0-5.5c0-1.3,0.3-2.5,0.5-3.8c0-0.3,0.2-0.6,0.2-0.9C0.7,101.7,0.9,101.2,1.2,100.8" />
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-6 mb-n6 d-none d-sm-block">
                            <svg class="fill-info" width="189.7px" height="182.4px" viewBox="0 0 189.7 182.4">
                                <path
                                    d="M27.2,37.9c-1.9,1.4-3.2,2.6-4,4.4c-0.2,0.5-0.5,1,0.1,1.4c0.3,0.2,1.1,0,1.1,0C24.5,41.4,28.1,41.2,27.2,37.9 M159.4,152.4c0.3,0.2,0.5,0.4,0.8,0.7c3.5-2.6,6.5-5.7,8.8-9.4c-1.7,1.2-3,2.8-4.5,4.2C162.8,149.5,161.1,150.9,159.4,152.4 M58.2,69.6c3.4-5.2,7.7-9.9,9.5-15.9C62.7,57.9,60.6,63.8,58.2,69.6 M133.9,106.2c-3.2,4-7.8,7.2-8.4,13 C129.3,115.5,132.8,111.6,133.9,106.2 M31.5,33.9c7.9-6.7,17-11.9,24.2-19.6C46.5,19.6,37.9,25.4,31.5,33.9 M154.5,109.5 c-7.4,9.6-14.7,18.9-21.9,28.2C146.6,125.7,153.4,116.8,154.5,109.5 M34.4,70.2c0.4-0.2,0.9-0.4,1-0.7C39,59,46.4,51.4,54.4,44 c4-3.6,6.6-8.5,10.1-13.8C53.4,33.8,34.8,59,34.4,70.2 M86.4,182.4c-42.1-0.7-70.8-24.4-82.7-62.1c-6.8-21.6-3.9-42.6,6-62.4 c9.9-20,24.7-36,44.9-46.3C62.9,7.3,72,4.2,80.8,0.8c3.5-1.3,7.1-1,10.8,0.3c4.6,1.6,9.5,2.3,14.4,2.2c10.8-0.4,20.4,3.1,29.3,8.6 c6,3.7,12.5,6.7,17.9,11.4c16.7,14.6,28.3,32.5,34.9,53.6c2.5,8,1.6,16.1,0.8,24.2c-0.4,4.6-2.3,9.2-3,13.7c-0.6,3.5-3.4,6-3.2,8.3 c0.3,3.5-1.1,5.7-2.5,8.1c-13.2,22.9-34,35.9-58.4,44c-8.7,2.9-17.4,5.3-26.4,6.6C91.9,182.3,88.3,182.3,86.4,182.4" />
                            </svg>
                        </figure>

                        <div class="row position-relative p-sm-3">
                            <!-- Content START -->
                            <div class="col-lg-7">
                                <!-- Title -->
                                <h3>Embarquez pour des histoires inoubliables avec Matuacm</h3>

                                <p class="mb-2">Avec Matuacm, chaque trajet est une opportunité de rencontrer des
                                    personnes fascinantes. Partagez votre route et créez des souvenirs avec des compagnons
                                    de voyage venus de tous horizons. Découvrez une expérience unique grâce au covoiturage.
                                </p>
                                <!-- List -->
                                <ul class="list-inline position-relative mb-4">
                                    <li class="list-inline-item me-3"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>24/7 Support Client</li>
                                    <li class="list-inline-item"> <i
                                            class="bi bi-patch-check-fill text-success me-1"></i>Chauffeur très apprécié -
                                        Partenaire</li>
                                </ul>
                                <!-- Button -->
                                <div class="hstack gap-3">
                                    <!-- Google play store button -->
                                    <a href="#"> <img src="{{ asset('assets/images/element/google-play.svg') }}"
                                            class="h-50px" alt=""> </a>
                                    <!-- App store button -->
                                    <a href="#"> <img src="{{ asset('assets/images/element/app-store.svg') }}"
                                            class="h-50px" alt=""> </a>
                                </div>
                            </div>
                            <!-- Content START -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                            Action box END -->

    <!-- =======================
                                                                                                            Faqs START-->
    <section class="pt-0 pt-lg-5">
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto">
                    <h3 class="mb-4 text-center">Questions Fréquemment Posées</h3>

                    <!-- FAQ START -->
                    <div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    Qu'est-ce que Matuacm ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Matuacm est une plateforme en ligne qui facilite le covoiturage entre particuliers.
                                    Elle permet aux conducteurs ayant des places libres dans leur véhicule de les partager
                                    avec des passagers souhaitant se rendre à la même destination.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    Comment rechercher un trajet sur Matuacm ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Pour rechercher un trajet, il vous suffit de saisir votre point de départ, votre
                                    destination, la date et heure de votre déplacement dans la barre de recherche. Vous
                                    pourrez
                                    ensuite parcourir les trajets disponibles et choisir celui qui vous convient le mieux.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    Comment réserver une place ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Une fois que vous avez trouvé un trajet qui vous convient, cliquez sur "Réserver" et
                                    suivez les instructions pour confirmer votre réservation. Vous devrez effectuer le
                                    paiement en ligne pour sécuriser votre place.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    Comment publier un trajet en tant que conducteur ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    <p>Pour publier un trajet, connectez-vous à votre compte, puis cliquez sur "Publier un
                                        trajet". Indiquez les détails de votre trajet, tels que l'heure de départ, le nombre
                                        de places disponibles et le prix par passager, puis publiez votre offre.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    Comment fonctionne le paiement en ligne ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Matuacm propose un système de paiement en ligne sécurisé. Les passagers paient leur
                                    place en ligne lors de la réservation, et les conducteurs reçoivent les paiements
                                    directement sur leur compte après la réalisation du trajet.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-6">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">
                                    Quelles mesures de sécurité sont en place sur Matuacm ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Matuacm prend la sécurité très au sérieux. Nous proposons des vérifications d'identité,
                                    des antécédents et des coordonnées pour les utilisateurs. Les avis et évaluations
                                    permettent également de choisir des conducteurs et des passagers de confiance.
                                </div>
                            </div>
                        </div> <br>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-7">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false"
                                    aria-controls="collapse-7">
                                    Puis-je annuler une réservation ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Oui, vous pouvez annuler une réservation. Cependant, veuillez consulter notre politique
                                    d'annulation pour connaître les conditions et les éventuels frais associés.
                                </div>
                            </div>
                        </div> <br>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-8">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false"
                                    aria-controls="collapse-8">
                                    Que faire en cas de problème pendant le trajet ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    En cas de problème pendant le trajet, Matuacm offre un service d'assistance routière.
                                    Vous pouvez également contacter notre service client pour obtenir de l'aide.
                                </div>
                            </div>
                        </div> <br>

                        <!-- Item -->
                        <div class="accordion-item">
                            <h6 class="accordion-header font-base" id="heading-9">
                                <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                    aria-controls="collapse-9">
                                    Qu'est-ce qu'un badge de vérification ?
                                </button>
                            </h6>
                            <!-- Body -->
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading-9"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Un badge de vérification est une indication sur le profil d'un utilisateur montrant
                                    qu'il a passé avec succès les étapes de vérification d'identité et de coordonnées. Cela
                                    aide à renforcer la confiance au sein de la communauté Matua.cm.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================Faqs END-->
@endsection
