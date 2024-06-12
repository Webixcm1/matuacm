@extends('layouts.main')

@section('title')
    Verification de compte - Matuacm - Première plateforme de covoiturage au Cameroun
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/quill/css/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/dropzone/css/dropzone.css') }}">
@endpush

@section('content')
    <!-- =======================
                                                                                                                                            Page Banner START -->
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto d-flex flex-column align-items-center text-center">
                    <h1 class="fs-2 mb-2">Vérification de votre compte.</h1>
                    <div class="alert alert-info mb-0 d-inline-block" role="alert">
                        <i class="bi bi-exclamation-octagon-fill me-2"></i>
                        Procédons à la vérification de votre compte. Tous les champs avec
                        <span class="text-danger">*</span> sont obligatoires.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Page Banner END -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form class="vstack gap-4" method="POST"
                        action="{{ route('verify-account.store', Auth()->user()->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Owner Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">informations Personnelles</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">

                                    <!-- Nom -->
                                    <div class="col-md-6">
                                        <label class="form-label">Nom <span class="text-danger">*</span></label>
                                        <input class="form-control @error('nom') is-invalid @enderror" type="text"
                                            placeholder="Tamo" name="nom" value="{{ old('nom') }}">
                                        @error('nom')
                                            <span class="text-danger">Ce Champ est obligatoire et unique</span>
                                        @enderror
                                    </div>

                                    <!-- Prenom -->
                                    <div class="col-md-6">
                                        <label class="form-label">Prénom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                                            placeholder="Sylvestre" name="prenom" value="{{ old('prenom') }}">
                                        @error('prenom')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Contact number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Date de naissance <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control @error('dateNais') is-invalid @enderror" type="date"
                                            placeholder="" name="dateNais" value="{{ old('dateNais') }}">
                                        @error('dateNais')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Lieu de naissance</label>
                                        <input class="form-control @error('lieu_naissance') is-invalid @enderror"
                                            type="text" placeholder="Douala" name="lieu_naissance"
                                            value="{{ old('lieu_niassance') }}">
                                        @error('lieu_naissance')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label class="form-label">Sexe <span class="text-danger">*</span> </label>
                                        <select
                                            class="form-select js-choice form-control @error('sexe') is-invalid @enderror"
                                            data-search-enabled="true" name="sexe" value="{{ old('sexe') }}">
                                            <option value="">Choix..</option>
                                            <option value="homme" {{ old('sexe') == 'homme' ? 'selected' : '' }}>Homme
                                            </option>
                                            <option value="femme" {{ old('sexe') == 'femme' ? 'selected' : '' }}>Femme
                                            </option>
                                        </select>
                                        @error('sexe')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label class="form-label">Ville <span class="text-danger">*</span></label>
                                        <input class="form-control @error('ville') is-invalid @enderror" type="text"
                                            placeholder="Douala" name="ville" value="{{ old('ville') }}">
                                        @error('ville')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Adresse <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('adresse') is-invalid @enderror" rows="2" placeholder="adresse"
                                            name="adresse">{{ old('adresse') }}</textarea>
                                        @error('adresse')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Cni -->
                                    <div class="col-md-6">
                                        <label class="form-label">Numéro de CNI <span class="text-danger">*</span></label>
                                        <input class="form-control @error('cni') is-invalid @enderror" type="text"
                                            placeholder="001025000" name="cni" value="{{ old('cni') }}">
                                        @error('cni')
                                            <span class="text-danger">Ce Champ est obligatoire et unique</span>
                                        @enderror
                                    </div>

                                    <!-- CNI RECTO -->
                                    <div class="col-md-6">
                                        <label class="form-label">CNI Recto <span class="text-danger">*</span></label>
                                        <input class="form-control @error('cni_recto') is-invalid @enderror"
                                            type="file" accept="image/jpg, image/jpeg, image/png" name="cni_recto"
                                            value="{{ old('cni_recto') }}">
                                        <p class="small mb-0"><b>Note:</b> Uniquement JPG, JPEG, et
                                            PNG.</p>
                                        @error('cni_recto')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- CNI VERSO -->
                                    <div class="col-md-6">
                                        <label class="form-label">CNI Verso <span class="text-danger">*</span></label>
                                        <input class="form-control @error('cni_verso') is-invalid @enderror"
                                            type="file" accept="image/jpg, image/jpeg, image/png" name="cni_verso"
                                            value="{{ old('cni_verso') }}">
                                        <p class="small mb-0"><b>Note:</b> Uniquement JPG, JPEG, et
                                            PNG.</p>
                                        @error('cni_verso')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- IMAGE -->
                                    <div class="col-md-6">
                                        <label class="form-label">Photos <span class="small">(Une photos de vous)</span>
                                            <span class="text-danger">*</span></label>
                                        <input class="form-control @error('photos') is-invalid @enderror" type="file"
                                            accept="image/jpg, image/jpeg, image/png" name="photos"
                                            value="{{ old('photos') }}">
                                        <p class="small mb-0 "><b>Note:</b> Uniquement JPG, JPEG, et
                                            PNG.</p>
                                        @error('photos')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Owner Detail END -->

                        <!-- Driver Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Informations Complémentaires</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">

                                    <!-- Contact number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Numéro de permis <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control @error('numero_permis') is-invalid @enderror"
                                            type="text" placeholder="permis" name="numero_permis"
                                            value="{{ old('numero_permis') }}">
                                        @error('numero_permis')
                                            <span class="text-danger">Ce Champ est obligatoire et unique</span>
                                        @enderror
                                    </div>

                                    <!-- IMAGE PERMIS -->
                                    <div class="col-md-6">
                                        <label class="form-label">Image Permis
                                            <span class="text-danger">*</span></label>
                                        <input class="form-control @error('image_permis') is-invalid @enderror"
                                            type="file" accept="image/jpg, image/jpeg, image/png" name="image_permis"
                                            value="{{ old('image_permis') }}">
                                        <p class="small mb-0 "><b>Note:</b> Uniquement JPG, JPEG, et
                                            PNG.</p>
                                        @error('image_permis')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- DATE OBTENTION -->
                                    <div class="col-md-6">
                                        <label class="form-label">Date d'obtention <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control @error('date_obtention') is-invalid @enderror"
                                            type="date" placeholder="" name="date_obtention"
                                            value="{{ old('date_obtention') }}">
                                        @error('date_obtention')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Type vehicule -->
                                    <div class="col-md-6">
                                        <label class="form-label">Type de véhicule</label>
                                        <input class="form-control" type="text" placeholder="Toyota"
                                            name="type_vehicule" value="{{ old('type_vehicule') }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Marque <span class="text-danger">*</span></label>
                                        <input class="form-control @error('marque') is-invalid @enderror" type="text"
                                            placeholder="Toyota" name="marque" value="{{ old('marque') }}">
                                        @error('marque')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>

                                    <!-- Type vehicule -->
                                    <div class="col-md-6">
                                        <label class="form-label">Immatriculation <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control @error('immatriculation') is-invalid @enderror"
                                            type="text" placeholder="LT41J71" name="immatriculation"
                                            value="{{ old('immatriculation') }}">
                                        @error('immatriculation')
                                            <span class="text-danger">Ce Champ est obligatoire</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Driver Detail END -->

                            <!-- Button -->
                            <div class="text-end">
                                <button class="btn btn-primary mb-0" type="submit">Envoyer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/js/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/dropzone/js/dropzone.js') }}"></script>
@endpush
