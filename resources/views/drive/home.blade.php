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
                <h2 class="text-success">{{ $countTrajet }}</h2>
                <p class="mb-2"><span class="text-dark me-1">{{ $countTrajet }}</span>Trajets</p>
                <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Consulter
                        les trajets</a></div>
            </div>
        </div>

        <!-- Booked Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Réservations</h6>
                <h2 class="text-info"> {{ $countReservations }} </h2>
                <p class="mb-2"><span class="text-dark me-1"> {{ $countReservations }} </span>Réservations</p>
                <div class="mt-auto text-primary-hover"><a href="#"
                        class="text-decoration-underline p-0 mb-0">Consulter les Réservations</a></div>
            </div>
        </div>

        <!-- Available Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Trajets Disponible</h6>
                <h2 class="text-warning"> {{ $availableTrajet }} </h2>
                <p class="mb-2"><span class="text-success me-1"> {{ $availableTrajet }} </span>Trajets Disponible</p>
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
                    <h5 class="card-header-title">Vos Trajets
                        <span class="badge bg-primary bg-opacity-10 text-primary ms-2">{{ $countTrajet }} Trajets au
                            total</span>
                    </h5>
                </div>

                <!-- Card body START -->
                <div class="card-body vstack gap-3">
                    @if ($trajets->isEmpty())
                        <p class="text-center text-black" style="font-size: 20px">Vous n'avez publié aucun trajet pour le
                            moment.</p>
                    @else
                        @foreach ($trajets as $trajet)
                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="{{ asset($trajet->image) }}" class="card-img rounded-2"
                                            alt="{{ $trajet->point_depart }}">
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
                                                    <form action="{{ route('trajets.changeStatus', $trajet->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        @if ($trajet->status)
                                                            <li><button type="submit"
                                                                    class="dropdown-item btn btn-success"><i
                                                                        class="bi bi-check-circle me-1"></i>Fermé</button>
                                                            </li>
                                                        @else
                                                            <li><button type="submit"
                                                                    class="dropdown-item btn btn-success"><i
                                                                        class="bi bi-check-circle me-1"></i>Ouvrir</button>
                                                            </li>
                                                        @endif

                                                    </form>
                                                </ul>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5">
                                                <a href="#">{{ $trajet->point_depart }} -
                                                    {{ $trajet->destination }}</a>
                                            </h5>
                                            <small><i class="bi bi-calendar me-2"></i>{{ $trajet->date_depart }} à
                                                {{ $trajet->heure_depart }}</small>
                                            <small class="mt-1">
                                                @if ($trajet->status)
                                                    <a href="#" class="badge text-bg-success"><i
                                                            class="fas fa-circle me-2 small fw-bold"></i>
                                                        {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </a>
                                                @else
                                                    <a href="#" class="badge text-bg-danger"><i
                                                            class="fas fa-circle me-2 small fw-bold"></i>
                                                        {{ $trajet->status ? 'Ouvert' : 'Fermé' }} </a>
                                                @endif
                                            </small>


                                            <!-- Price and Button -->
                                            <div
                                                class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Price -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">XAF {{ $trajet->prix }}</h5>
                                                </div>
                                                <!-- Buttons -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="{{ route('trajets.edit', $trajet->id) }}"
                                                        class="btn btn-sm btn-primary mb-0">
                                                        <i class="bi bi-pencil-square fa-fw me-1"></i>Modifier
                                                    </a>
                                                    <form id="deleteForm{{ $trajet->id }}"
                                                        action="{{ route('trajets.destroy', $trajet->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger mb-0"
                                                            data-toggle="modal" data-target="#modal-danger"
                                                            data-id="{{ $trajet->id }}"
                                                            onclick="showDeleteModal('{{ $trajet->id }}')">
                                                            <i class="bi bi-trash3 fa-fw me-1"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->
                        @endforeach
                        {{ $trajets->links() }}
                    @endif
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Listing table END -->

    <!-- Modal -->
    <div class="modal fade" id="modal-danger" tabindex="-1" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression du trajet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûre de vouloir supprimer ce trajet? L'opération est ireversible.</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-outline-danger" id="confirmDeleteButton">Supprimer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#confirmDeleteButton').click(function() {
                var id = $('#modal-danger').data('id');
                document.getElementById('deleteForm' + id).submit();
            });
        });

        function showDeleteModal(id) {
            $('#modal-danger').data('id', id).modal('show');
        }
    </script>
@endpush
