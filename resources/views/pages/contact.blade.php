@extends('layouts.main')

@section('title')
    Contact - Mutocm - Première plateforme de covoiturage au Cameroun
@endsection

@section('content')
    <!--========= Section one start ==========-->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-10">
                    <!-- Title -->
                    <h2>Connectons-nous et apprenons à nous connaître</h2>
                    <p class="lead mb-0">Partagez vos trajets en toute convivialité. Surprenez-vous avec des rencontres
                        inattendues. Rejoignez-nous pour une expérience de covoiturage sans réserve.</p>
                </div>
            </div>

            <!-- Contact info -->
            <div class="row g-4">

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i
                                class="bi bi-headset fs-5"></i></div>
                        <!-- Title -->
                        <h5>Applez-nous</h5> <br>

                        <!-- Buttons -->
                        <div class="d-grid gap-3 d-sm-block">
                            <button class="btn btn-sm btn-primary-soft"><i class="bi bi-phone me-2"></i>(+237) 655 299
                                168</button> <br>
                            <button class="btn btn-sm btn-light"><i class="bi bi-telephone me-2"></i>(+237)653 335
                                285</button>
                        </div>
                    </div>
                </div>
                <!-- Contact item END -->

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i
                                class="bi bi-inboxes-fill fs-5"></i></div>
                        <!-- Title -->
                        <h5>Email</h5> <br>
                        <!-- Buttons -->
                        <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0"><i
                                class="bi bi-envelope me-1"></i>contact@matua.cm</a>
                    </div>
                </div>
                <!-- Contact item END -->

                <!-- Contact item START -->
                <div class="col-xl-4 position-relative">
                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 end-0 z-index-1 mt-n4 ms-n7">
                        <svg class="fill-warning" width="77px" height="77px">
                            <path
                                d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                            </path>
                        </svg>
                    </figure>

                    <div class="card card-body shadow text-center align-items-center h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-2"><i
                                class="bi bi-globe2 fs-5"></i></div>
                        <!-- Title -->
                        <h5>Réseau sociaux</h5> <br>
                        <!-- Buttons -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"> <a class="btn btn-sm bg-facebook px-2 mb-0" href="#"><i
                                        class="fab fa-fw fa-facebook-f"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-sm bg-instagram px-2 mb-0" href="#"><i
                                        class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-sm bg-twitter px-2 mb-0" href="#"><i
                                        class="fab fa-fw fa-twitter"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-sm bg-linkedin px-2 mb-0" href="#"><i
                                        class="fab fa-fw fa-linkedin-in"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Contact item END -->
            </div>
        </div>
    </section>
    <!---====== Section 1 end ====-->

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show col-5 text-center mx-auto" role="alert">
            <i class="fa fa-check fs-5"></i> <strong>Félicitation !</strong> Votre message a bien été envoyer.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Vector image START -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/images/element/car2.png') }}" alt="">
                </div>
                <!-- Vector image END -->

                <!-- Contact form START -->
                <div class="col-lg-6">
                    <div class="card bg-light p-4">
                        <!-- Svg decoration -->
                        <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                            <svg class="fill-orange" width="104.2px" height="95.2px">
                                <circle cx="2.6" cy="92.6" r="2.6" />
                                <circle cx="2.6" cy="77.6" r="2.6" />
                                <circle cx="2.6" cy="62.6" r="2.6" />
                                <circle cx="2.6" cy="47.6" r="2.6" />
                                <circle cx="2.6" cy="32.6" r="2.6" />
                                <circle cx="2.6" cy="17.6" r="2.6" />
                                <circle cx="2.6" cy="2.6" r="2.6" />
                                <circle cx="22.4" cy="92.6" r="2.6" />
                                <circle cx="22.4" cy="77.6" r="2.6" />
                                <circle cx="22.4" cy="62.6" r="2.6" />
                                <circle cx="22.4" cy="47.6" r="2.6" />
                                <circle cx="22.4" cy="32.6" r="2.6" />
                                <circle cx="22.4" cy="17.6" r="2.6" />
                                <circle cx="22.4" cy="2.6" r="2.6" />
                                <circle cx="42.2" cy="92.6" r="2.6" />
                                <circle cx="42.2" cy="77.6" r="2.6" />
                                <circle cx="42.2" cy="62.6" r="2.6" />
                                <circle cx="42.2" cy="47.6" r="2.6" />
                                <circle cx="42.2" cy="32.6" r="2.6" />
                                <circle cx="42.2" cy="17.6" r="2.6" />
                                <circle cx="42.2" cy="2.6" r="2.6" />
                                <circle cx="62" cy="92.6" r="2.6" />
                                <circle cx="62" cy="77.6" r="2.6" />
                                <circle cx="62" cy="62.6" r="2.6" />
                                <circle cx="62" cy="47.6" r="2.6" />
                                <circle cx="62" cy="32.6" r="2.6" />
                                <circle cx="62" cy="17.6" r="2.6" />
                                <circle cx="62" cy="2.6" r="2.6" />
                                <circle cx="81.8" cy="92.6" r="2.6" />
                                <circle cx="81.8" cy="77.6" r="2.6" />
                                <circle cx="81.8" cy="62.6" r="2.6" />
                                <circle cx="81.8" cy="47.6" r="2.6" />
                                <circle cx="81.8" cy="32.6" r="2.6" />
                                <circle cx="81.8" cy="17.6" r="2.6" />
                                <circle cx="81.8" cy="2.6" r="2.6" />
                                <circle cx="101.7" cy="92.6" r="2.6" />
                                <circle cx="101.7" cy="77.6" r="2.6" />
                                <circle cx="101.7" cy="62.6" r="2.6" />
                                <circle cx="101.7" cy="47.6" r="2.6" />
                                <circle cx="101.7" cy="32.6" r="2.6" />
                                <circle cx="101.7" cy="17.6" r="2.6" />
                                <circle cx="101.7" cy="2.6" r="2.6" />
                            </svg>
                        </figure>

                        <!-- Card header -->
                        <div class="card-header bg-light p-0 pb-3">
                            <h3 class="mb-0">Envoyez nous un message</h3>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-0">
                            <form class="row g-4" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Nom *</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                        name="nom" value="{{ old('nom') }}">
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}">
                                </div>
                                <!-- Mobile number -->
                                <div class="col-12">
                                    <label class="form-label">Téléphone *</label>
                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                        name="telephone" value="{{ old('telephone') }}">
                                </div>
                                <!-- Message -->
                                <div class="col-12">
                                    <label class="form-label">Message *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" rows="3" name="message"></textarea>
                                </div>

                                <!-- Button -->
                                <div class="col-12">
                                    <button class="btn btn-dark mb-0" type="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
@endsection
