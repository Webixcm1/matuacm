@extends('layouts.app')

@section('title1')
    <i class="bi bi-house-door fa-fw me-1"></i>Tableau de bord
@endsection

@section('content1')
    <!-- Counter START -->
    <div class="row g-4">
        <!-- Earning item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Trajets</h6>
                <h2 class="text-success">10</h2>
                <p class="mb-2"><span class="text-dark me-1">10</span>Trajets</p>
                <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Consulter
                        les trajets</a></div>
            </div>
        </div>

        <!-- Booked Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Réservations</h6>
                <h2 class="text-info">58</h2>
                <p class="mb-2"><span class="text-dark me-1">102</span>Réservations</p>
                <div class="mt-auto text-primary-hover"><a href="#"
                        class="text-decoration-underline p-0 mb-0">Consulter les Réservations</a></div>
            </div>
        </div>

        <!-- Available Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Trajets Disponible</h6>
                <h2 class="text-warning">42</h2>
                <p class="mb-2"><span class="text-success me-1">3</span>Trajets Disponible</p>
                <div class="mt-auto text-primary-hover"><a href="#"
                        class="text-decoration-underline p-0 mb-0">Consulter
                        les trajets</a></div>
            </div>
        </div>

    </div>
    <!-- Counter END -->

    <!-- Listing table START -->
    <div class="row">
        <div class="col-12">

            <div class="card border">
                <!-- Card header -->
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Vos Trajets<span
                            class="badge bg-primary bg-opacity-10 text-primary ms-2">5 Trajets</span></h5>
                </div>

                <!-- Card body START -->
                <div class="card-body vstack gap-3">
                    <!-- Listing item START -->
                    <div class="card border p-2">
                        <div class="row g-4">
                            <!-- Card img -->
                            <div class="col-md-3 col-lg-2">
                                <img src="{{ asset('assets/images/category/hotel/4by3/10.jpg') }}"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-9 col-lg-10">
                                <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                        <!-- Share button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                            id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                            aria-labelledby="dropdownAction2">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-info-circle me-1"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village Resort &
                                            Spa</a></h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

                                    <!-- Price and Button -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$1586</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="hstack gap-2 mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                    class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger mb-0"><i
                                                    class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Listing item END -->

                    <!-- Listing item START -->
                    <div class="card border p-2">
                        <div class="row g-4">
                            <!-- Card img -->
                            <div class="col-md-3 col-lg-2">
                                <img src="{{ asset('assets/images/category/hotel/4by3/05.jpg') }}"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-9 col-lg-10">
                                <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                        <!-- Share button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                            id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                            aria-labelledby="dropdownAction3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-info-circle me-1"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Royal Beach Resort</a>
                                    </h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London - 24578</small>

                                    <!-- Price and Button -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$856</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="hstack gap-2 mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                    class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger mb-0"><i
                                                    class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Listing item END -->

                    <!-- Listing item START -->
                    <div class="card border p-2">
                        <div class="row g-4">
                            <!-- Card img -->
                            <div class="col-md-3 col-lg-2">
                                <img src="{{ asset('assets/images/category/hotel/4by3/04.jpg') }}"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-9 col-lg-10">
                                <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                        <!-- Share button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                            id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                            aria-labelledby="dropdownAction4">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-info-circle me-1"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Carina Beach Resort</a>
                                    </h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles -
                                        90045</small>

                                    <!-- Price and Button -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$1025</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="hstack gap-2 mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                    class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger mb-0"><i
                                                    class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Listing item END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Listing table END -->
@endsection
