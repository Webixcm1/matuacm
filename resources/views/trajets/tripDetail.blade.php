@extends('layouts.main')

@section('title')
    {{ $trajet->point_depart }} - {{ $trajet->destination }} - Mutocm - Première plateforme de covoiturage au Cameroun
@endsection

@section('content')
    <!-- ======================= Main Banner START -->
    <section class="pt-4">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta -->
                    <div class="d-flex justify-content-between align-items-lg-center">
                        <!-- Title -->
                        <ul class="nav nav-divider align-items-center mb-0">
                            <li class="nav-item h4">{{ $trajet->point_depart }} - {{ $trajet->destination }}</li>
                            <li class="nav-item h5 fw-light">
                                {{ \Carbon\Carbon::parse($trajet->date_depart)->format('d M Y') }} -
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $trajet->heure_depart)->format('H:i') }}</li>
                        </ul>

                        <!-- Buttons -->
                        <div class="ms-3" data-title="{{ $trajet->point_depart }} - {{ $trajet->destination }}"
                            data-url="{{ route('trips.show', $trajet->id) }}">
                            <!-- Share button -->
                            <a href="#" class="btn btn-sm btn-light px-2 mb-0" role="button"
                                id="dropdownShare{{ $trajet->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-fw fa-share-alt"></i>
                            </a>
                            <!-- Dropdown button -->
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                aria-labelledby="dropdownShare{{ $trajet->id }}">
                                <li><a class="dropdown-item share-twitter" href="#"
                                        data-trajet-id="{{ $trajet->id }}"><i
                                            class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                <li><a class="dropdown-item share-facebook" href="#"
                                        data-trajet-id="{{ $trajet->id }}"><i
                                            class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                <li><a class="dropdown-item share-linkedin" href="#"
                                        data-trajet-id="{{ $trajet->id }}"><i
                                            class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item copy-link" href="#"
                                        data-trajet-id="{{ $trajet->id }}"><i class="fa-solid fa-copy me-2"></i>Copy
                                        link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Title and button END -->
            </div>
    </section>
    <!-- ======================= Main Banner END -->

    <!-- ======================= Main Content START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>
            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">

                        <!-- Main cab list START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-4 align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="{{ asset($trajet->image) }}" alt="">
                                        </div>
                                    </div>

                                    <!-- card body -->
                                    <div class="col-md-8">
                                        <!-- Title and rating -->
                                        <div class="d-sm-flex justify-content-sm-between">
                                            <!-- Card title -->
                                            <div>
                                                <h4 class="card-title mb-2">{{ $trajet->point_depart }} -
                                                    {{ $trajet->destination }} </h4>
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">Publier Par : {{ $trajet->conducteur->user->nom }}
                                                        {{ $trajet->conducteur->user->prenom }} </li>
                                                    <li class="nav-item">
                                                        @if ($trajet->status)
                                                    <li class="badge text-bg-success"><i
                                                            class="fas fa-circle me-2 small fw-bold"></i>
                                                        {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </li>
                                                @else
                                                    <li class="badge text-bg-danger"><i
                                                            class="fas fa-circle me-2 small fw-bold"></i>
                                                        {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </li>
                                                    @endif
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Rating Star -->
                                            <ul class="list-inline mb-0">
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

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i
                                                        class="bi bi-calendar-date-fill me-2"></i>Date de départ :
                                                    {{ \Carbon\Carbon::parse($trajet->date_depart)->format('d M Y') }}</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i class="bi bi-alarm-fill me-2"></i>Heure
                                                    de départ :
                                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $trajet->heure_depart)->format('H:i') }}</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i class="bi bi-people-fill me-2"></i>Nombre
                                                    de place :
                                                    {{ $trajet->nombre_place }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Main cab list END -->

                        <!-- Trip Details START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent">
                                <h4 class="mb-0">Détails Du Trajet</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-4">
                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Départ</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter exact pick up address"
                                                value="{{ $trajet->point_depart }}" disabled>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Destination</label>
                                            <input type="text" class="form-control form-control-lg"
                                                value="{{ $trajet->destination }}" disabled>
                                        </div>
                                    </div>

                                    <h5 class="mb-0 mt-4">Information du Passagers</h5>

                                    <!-- Radio button -->
                                    <div class="col-md-4">
                                        <label class="form-label">Sexe</label>
                                        <div>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="sexe" id="btnradio1"
                                                    checked="">
                                                <label class="btn btn-lg btn-light btn-dark-bg-check mb-0"
                                                    for="btnradio1">Homme</label>

                                                <input type="radio" class="btn-check" name="sexe" id="btnradio2">
                                                <label class="btn btn-lg btn-light btn-dark-bg-check mb-0"
                                                    for="btnradio2">Femme</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-8">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Nom</label>
                                            <input type="text" class="form-control form-control-lg" name="nom">
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg" name="email">
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Numéro de Téléphone</label>
                                            <input type="text" class="form-control form-control-lg" name="telephone">
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Trip Details END -->

                        <!-- Driver and cab detail START -->
                        <div class="card bg-transparent">

                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Description</h4>
                            </div>

                            <!-- Card body -->
                            <div class="card-body pt-4 p-0">
                                <!-- List -->
                                <ul>
                                    <p class="mb-2"> {{ $trajet->description }} </p>
                                </ul>

                                <!-- Trip images -->
                                <h5>Images</h5>

                                <!-- Images -->
                                <div class="row">
                                    <!-- Slider START -->
                                    <div class="tiny-slider arrow-round arrow-xs arrow-dark">
                                        <div class="tiny-slider-inner rounded-2" data-autoplay="false" data-arrow="true"
                                            data-dots="false" data-items="3" data-items-sm="2">
                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="{{ asset($trajet->image) }}">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="{{ asset($trajet->image) }}" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slider END -->
                                </div>
                            </div>

                        </div>
                        <!-- Driver and cab detail END -->

                        <!-- Safety Guidelines START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Consignes de Sécurité Routière</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Attachez toujours votre ceinture de sécurité,
                                        que vous soyez à l'avant ou à l'arrière du véhicule.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Respectez les limitations de vitesse et
                                        adaptez votre conduite aux conditions routières et météorologiques.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Évitez les distractions au volant, y compris
                                        l'utilisation de votre téléphone portable sans kit mains libres.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Gardez une distance de sécurité suffisante
                                        avec le véhicule devant vous pour pouvoir réagir en cas de freinage soudain.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Assurez-vous que votre véhicule est en bon
                                        état de marche avant de partir, en vérifiant les freins, les pneus et les niveaux de
                                        fluides.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Ne conduisez jamais sous l'influence de
                                        l'alcool, de drogues ou de médicaments qui peuvent altérer votre capacité à
                                        conduire.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Utilisez les indicateurs de direction pour
                                        signaler vos intentions aux autres usagers de la route.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Respectez les règles de priorité et soyez
                                        particulièrement vigilant aux intersections et aux passages piétons.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Faites des pauses régulières lors des longs
                                        trajets pour éviter la fatigue au volant.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>En cas de conditions météorologiques
                                        défavorables (pluie, brouillard), réduisez votre vitesse et allumez vos feux
                                        de croisement.
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->
                        </div>

                        <!-- Safety Guidelines END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Sidebar START -->
                <aside class="col-xl-4">
                    <div data-sticky data-margin-top="80" data-sticky-for="1199">
                        <div class="card card-body bg-light p-4">

                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Prix</span>
                                    <span class="h6 fw-light mb-0">XAF{{ $trajet->prix }} </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Frais Service</span>
                                    <span class="h6 fw-light mb-0">XAF500</span>
                                </li>
                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li>
                                <!-- Divider -->
                                <li class="list-group-item d-flex justify-content-between pb-0">
                                    <span class="h5 fw-normal mb-0">Total</span>
                                    <span class="h5 fw-normal mb-0">XFA 50000</span>
                                </li>
                            </ul>

                            <div class="d-grid mt-4 gap-2">
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount1"
                                        value="option1" checked="">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount1">Payer maintenant
                                        XAF50000</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount2"
                                        value="option2">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount2">Pay XAF50000</label>
                                </div>

                                <!-- Button -->
                                <a href="#" class="btn btn-dark mb-0 mt-2">Reserver</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- ======================= Main Content END -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour gérer le partage
            function handleShare(event, platform) {
                event.preventDefault();
                const trajetElement = event.target.closest('.ms-3');
                const tripTitle = trajetElement.getAttribute('data-title');
                const tripUrl = trajetElement.getAttribute('data-url');

                let url = '';
                switch (platform) {
                    case 'twitter':
                        url =
                            `https://twitter.com/intent/tweet?text=${encodeURIComponent(tripTitle)}&url=${encodeURIComponent(tripUrl)}`;
                        break;
                    case 'facebook':
                        url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(tripUrl)}`;
                        break;
                    case 'linkedin':
                        url =
                            `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(tripUrl)}&title=${encodeURIComponent(tripTitle)}`;
                        break;
                    case 'copy':
                        navigator.clipboard.writeText(tripUrl).then(() => {
                            alert('Lien copié dans le presse-papier');
                        }, (err) => {
                            console.error('Erreur lors de la copie du lien: ', err);
                        });
                        return; // Sortir de la fonction pour éviter l'ouverture de fenêtre
                }
                window.open(url, '_blank');
            }

            // Ajouter les écouteurs d'événements pour les boutons de partage
            document.querySelectorAll('.share-twitter').forEach(button => {
                button.addEventListener('click', function(event) {
                    handleShare(event, 'twitter');
                });
            });

            document.querySelectorAll('.share-facebook').forEach(button => {
                button.addEventListener('click', function(event) {
                    handleShare(event, 'facebook');
                });
            });

            document.querySelectorAll('.share-linkedin').forEach(button => {
                button.addEventListener('click', function(event) {
                    handleShare(event, 'linkedin');
                });
            });

            document.querySelectorAll('.copy-link').forEach(button => {
                button.addEventListener('click', function(event) {
                    handleShare(event, 'copy');
                });
            });
        });
    </script>
@endpush
