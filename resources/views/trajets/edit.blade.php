@extends('layouts.app')

@section('title1')
    <i class="fa fa-car fa-fw me-1"></i>Trajets
@endsection

@section('content1')
    <!-- New trajet START -->
    <div class="col-12">
        <div class="card border">
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Modification du Trajet <strong
                        class="text-primary text-uppercase">{{ $trajet->point_depart }} - {{ $trajet->destination }}
                    </strong> </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('trajets.update', $trajet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        <!-- Depart -->
                        <div class="col-md-6">
                            <label class="form-label">Départ</label>
                            <input class="form-control @error('point_depart') is-invalid @enderror" type="text"
                                placeholder="Douala" name="point_depart" value="{{ $trajet->point_depart }}">
                            @error('point_depart')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>

                        <!-- Destination -->
                        <div class="col-md-6">
                            <label class="form-label">Destination</label>
                            <input type="text" class="form-control @error('destination') is-invalid @enderror"
                                placeholder="Kribi" name="destination" value="{{ $trajet->destination }}">
                            @error('destination')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>

                        <!-- Date depart -->
                        <div class="col-md-6">
                            <label class="form-label">Date de départ</label>
                            <input class="form-control @error('date_depart') is-invalid @enderror" type="date"
                                placeholder="29 Jun 2024" name="date_depart" value="{{ $trajet->date_depart }}">
                            @error('date_depart')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>

                        <!-- Heure depart -->
                        <div class="col-md-6">
                            <label class="form-label">Heure de départ</label>
                            <input class="form-control @error('heure_depart') is-invalid @enderror" type="time"
                                placeholder="" name="heure_depart" value="{{ $trajet->heure_depart }}">
                            @error('heure_depart')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>

                        <!-- nombre place -->
                        <div class="col-md-6">
                            <label class="form-label">Nombre de place</label>
                            <input class="form-control @error('nombre_place') is-invalid @enderror" type="text"
                                placeholder="10" name="nombre_place" value="{{ $trajet->nombre_place }}">
                            @error('nombre_place')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>

                        <!-- Prix -->
                        <div class="col-md-6">
                            <label class="form-label">Prix</label>
                            <input class="form-control @error('prix') is-invalid @enderror" type="text"
                                placeholder="10000" name="prix" value="{{ $trajet->prix }}">
                            @error('prix')
                                <span class="text-danger">Ce Champ est obligatoire et unique</span>
                            @enderror
                        </div>

                        <!-- status -->
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select js-choice form-control @error('status') is-invalid @enderror"
                                data-search-enabled="true" name="status" value="{{ old('status') }}">
                                <option value="{{ $trajet->status }}">{{ $trajet->status ? 'Ouvert' : 'Fermé' }}</option>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Ouvert
                                </option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Fermé
                                </option>
                            </select>
                            @error('status')
                                <span class="text-danger">Ce Champ est obligatoire et unique</span>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="col-md-6">
                            <label class="form-label">Image du véhicule</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                accept="image/jpg, image/jpeg, image/png" name="image" value="{{ old('image') }}">
                            <p class="small mb-0"><b>Note:</b> Uniquement JPG, JPEG, et
                                PNG.</p>
                            <div class="col-md-3 col-lg-2">
                                <img src="{{ asset($trajet->image) }}" class="card-img rounded-2"
                                    alt="{{ $trajet->point_depart }}">
                            </div>
                            @error('image')
                                <span class="text-danger">Ce Champ est obligatoire</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" rows="2" placeholder="description"
                            name="description">{{ $trajet->description }}</textarea>
                        <p class="small mb-0"><b>Note:</b>Donnez une description du vehicule ou tout autre informations.
                        </p>
                        @error('description')
                            <span class="text-danger">Ce Champ est obligatoire</span>
                        @enderror
                    </div>
                    <!-- Save button -->
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('home') }}" class="btn text-secondary border-0 me-2">Retour</a>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- New Trajet END -->
@endsection
