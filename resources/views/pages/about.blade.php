@extends('layouts.main')

@section('title')
    Matuacm :: A Propos
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-10 mx-auto text-center">
                    <!-- Title -->
                    <h1>Pour une découverte du monde, Matuacm vous guide.</h1>
                    <p class="lead">
                        Partagez des trajets empreints de convivialité. Soyez surpris sans retenue.
                        Rejoignez-nous et découvrez une expérience unique de covoiturage.
                    </p>
                </div>
            </div> <!-- Row END -->

            <!-- Image START -->
            <div class="row g-4 align-items-center">
                <!-- Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/12.jpg') }}" class="rounded-3" alt="">
                </div>

                <div class="col-md-6">
                    <div class="row g-4">
                        <!-- Image -->
                        <div class="col-md-8">
                            <img src="{{ asset('assets/images/about/13.png') }}" class="rounded-3" alt="">
                        </div>

                        <!-- Image -->
                        <div class="col-12">
                            <img src="{{ asset('assets/images/about/14.png') }}" class="rounded-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image END -->
        </div>
    </section>

    <!--==== Story Section Start ====-->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <!-- Content START -->
            <div class="row mb-4 mb-md-5">
                <div class="col-md-10 mx-auto">
                    <h3 class="mb-4">A Propos</h3>
                    <p class="fw-bold">Matuacm tire son nom de la langue Yemba, où "Matua" signifie voiture. C'est une
                        plateforme 100% camerounaise qui facilite le covoiturage entre particuliers. Son
                        objectif est de répondre aux besoins de déplacement de manière écologique, économique et conviviale.
                    </p>
                    <p class="mb-0">En mettant en relation des conducteurs effectuant un trajet avec des places libres et
                        des passagers partageant la même destination, Matuacm encourage l'utilisation efficace des
                        véhicules et réduit ainsi l'empreinte carbone associée aux déplacements individuels.
                        Grâce à une interface conviviale, les utilisateurs peuvent facilement rechercher des trajets
                        disponibles en spécifiant leur point de départ, leur destination et la date de leur déplacement. Ils
                        peuvent également réserver des places dans les trajets qui leur conviennent, en fonction de la
                        disponibilité des conducteurs.
                        Matuacm propose également un système de paiement en ligne sécurisé, des avis et évaluations pour
                        assurer la fiabilité des trajets, ainsi qu'un service client réactif pour répondre aux questions et
                        aux problèmes rencontrés par les utilisateurs.
                        En encourageant le covoiturage, Matua.cm favorise la création de liens sociaux, réduit les coûts de
                        déplacement pour les utilisateurs et contribue à la préservation de l'environnement en diminuant les
                        émissions de CO2 liées aux déplacements individuels.
                        Avec son engagement en faveur de la durabilité, de la praticité et de la convivialité, Matuacm est
                        bien plus qu'une simple plateforme de covoiturage; c'est un partenaire de confiance pour des
                        déplacements plus intelligents et plus durables.
                    </p>
                </div>
            </div>
            <!-- Content END -->
        </div>
    </section>
    <!---===== Story Section End ====--->

    <!-- =======================
                                    Team START -->
    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-0">Notre Team</h2>
                </div>
            </div>

            <!-- Team START -->
            <div class="row g-4">
                <!-- Team item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-element-hover bg-transparent">
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="{{ asset('assets/images/team/karim.jpg') }}" class="card-img" alt="">

                            <div class="card-img-overlay hover-element d-flex p-3">
                                <!-- Category -->
                                <div class="btn-group mt-auto">
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-facebook-f text-facebook"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-instagram text-instagram"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-twitter text-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-2 pb-0">
                            <h5 class="card-title"><a href="#">Karim Kompissi</a></h5>
                            <span>CEO, Co-fonder</span>
                        </div>
                    </div>
                </div>
                <!-- Team item END -->

                <!-- Team item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-element-hover bg-transparent">
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="{{ asset('assets/images/team/04.jpg')}}" class="card-img" alt="">

                            <div class="card-img-overlay hover-element d-flex p-3">
                                <!-- Category -->
                                <div class="btn-group mt-auto">
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-facebook-f text-facebook"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-instagram text-instagram"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-twitter text-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-2 pb-0">
                            <h5 class="card-title"><a href="#">Steve</a></h5>
                            <span>Co-Fonder</span>
                        </div>
                    </div>
                </div>
                <!-- Team item END -->

                <!-- Team item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-element-hover bg-transparent">
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="{{ asset('assets/images/team/05.jpg') }}" class="card-img" alt="">

                            <div class="card-img-overlay hover-element d-flex p-3">
                                <!-- Category -->
                                <div class="btn-group mt-auto">
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-facebook-f text-facebook"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-instagram text-instagram"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-twitter text-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-2 pb-0">
                            <h5 class="card-title"><a href="#">Maître Paule</a></h5>
                            <span>Juriste, avocat au bareau du Cameroun</span>
                        </div>
                    </div>
                </div>
                <!-- Team item END -->

                <!-- Team item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-element-hover bg-transparent">
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="{{ asset('assets/images/team/02.jpg') }}" class="card-img" alt="">

                            <div class="card-img-overlay hover-element d-flex p-3">
                                <!-- Category -->
                                <div class="btn-group mt-auto">
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-facebook-f text-facebook"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-instagram text-instagram"></i></a>
                                    <a href="#" class="btn btn-white mb-0"><i
                                            class="fa-brands fa-twitter text-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-2 pb-0">
                            <h5 class="card-title"><a href="#">Celiane Domgni</a></h5>
                            <span>Directrice Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- Team item END -->

            </div>
            <!-- Team END -->
        </div>
    </section>
    <!-- =======================
                                    Team END -->
@endsection
