@extends('layouts.app')

@section('title1')
    <h1 class="fs-4 mb-0"><i class="bi bi-gear fa-fw me-1"></i>Paramètre</h1>
@endsection

@section('content1')
    <!-- Tabs START -->
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light pb-0 px-2 px-lg-0 rounded-top">
                <ul class="nav nav-tabs nav-bottom-line nav-responsive border-0 nav-justified" role="tablist">
                    <li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1"><i
                                class="fas fa-cog fa-fw me-2"></i>Editer le Profile</a> </li>
                    <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3"><i
                                class="fas fa-user-circle fa-fw me-2"></i>Journal d'Activité</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Tabs END -->

    <!-- Tabs Content START -->
    <div class="row g-4">
        <div class="col-12">
            <div class="tab-content">
                <!-- Tab content 1 START -->
                <div class="tab-pane show active" id="tab-1">
                    <div class="row g-4">
                        <!-- Edit profile START -->
                        <div class="col-12">
                            <div class="card border">
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Profile</h5>
                                </div>
                                <div class="card-body">

                                    <form action="{{ route('settings.update.profile', Auth::user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <!-- Nom -->
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" id="nom" class="form-control"
                                                value="{{ Auth::user()->nom }}" name="nom" disabled>
                                        </div>

                                        <!-- Prenom -->
                                        <div class="mb-3">
                                            <label for="prenom" class="form-label">Prenom</label>
                                            <input type="text" id="prenom" class="form-control"
                                                value="{{ Auth::user()->prenom }}" name="prenom" disabled>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                value="{{ Auth::user()->email }}" disabled>
                                        </div>

                                        <!-- Profile picture -->
                                        <div class="mb-3">
                                            <label for="avatar" class="form-label">Avatar</label>
                                            <!-- Avatar upload START -->
                                            <div class="d-flex align-items-center">
                                                <label class="position-relative me-4" for="avatar"
                                                    title="Replace this pic">
                                                    <!-- Avatar placeholder -->
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-1-preview"
                                                            class="avatar-img rounded-circle border border-white border-3 shadow"
                                                            src="{{ asset(Auth::user()->avatar) }}" alt="avatar">
                                                    </span>
                                                </label>
                                            </div>
                                            <input id="avatar" class="form-control" type="file" name="avatar"
                                                accept="image/jpg, image/jpeg, image/png">
                                            @error('avatar')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <!-- Avatar upload END -->
                                        </div>

                                        <!-- Mobile number -->
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Téléphone</label>
                                            <input type="text" id="telephone" class="form-control"
                                                value="{{ Auth::user()->telephone }}" name="telephone">
                                            @error('telephone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Save button -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Edit profile END -->

                        <!-- Update Email START -->
                        <div class="col-md-6">
                            <div class="card border">
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Modifier l'Email</h5>
                                    <p class="mb-0 small">Votre adresse mail actuelle est : <span class="text-primary">
                                            {{ Auth::user()->email }} </span></p>
                                </div>
                                <form class="card-body" action="{{ route('settings.update.email', Auth::user()->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <!-- Email -->
                                    <label class="form-label">Entrer la nouvelle adresse email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="test@test.com" name="email">
                                    @error('email')
                                        <span class="text-danger">Ce champ est obligatoire et doit être unique</span>
                                    @enderror

                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary mb-0">Sauvegarder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Update Email END -->

                        <!-- Update Password START -->
                        <div class="col-md-6">
                            <div class="card border">
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Modifier le Mot de Passe</h5>
                                    <p class="mb-0 small">Votre adresse mail actuelle est : <span class="text-primary">
                                            {{ Auth::user()->email }} </span></p>
                                </div>
                                <!-- Card body START -->
                                <form class="card-body"
                                    action="{{ route('settings.update.password', Auth::user()->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <!-- Current password -->
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe actuel</label>
                                        <input class="form-control @error('current_password') is-invalid @enderror"
                                            type="password" placeholder="mot de passe actuel" name="current_password">
                                        @error('current_password')
                                            <span class="text-danger">Ce champ est obligatoire</span>
                                        @enderror
                                    </div>
                                    <!-- New password -->
                                    <div class="mb-3">
                                        <label class="form-label">Nouveau mot de passe</label>
                                        <div class="input-group">
                                            <input
                                                class="form-control fakepassword @error('password') is-invalid @enderror"
                                                type="password" id="psw-input" placeholder="nouveau mot de passe"
                                                name="password">
                                            <span class="input-group-text p-0 bg-transparent">
                                                <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                            </span>

                                        </div>
                                        @error('password')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <!-- Confirm -->
                                    <div>
                                        <label class="form-label">Confirmez le mot de passe</label>
                                        <input class="form-control" type="password"
                                            placeholder="Confirmez le mot de passe" name="password_confirmation"
                                            id="password_confirmation">
                                    </div>

                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary mb-0">Sauvegarder</button>
                                    </div>
                                </form>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Update Password END -->
                    </div>
                </div>
                <!-- Tab content 1 END -->

                <!-- Tab content 3 START -->
                <div class="tab-pane" id="tab-3">
                    <div class="row g-4">

                        <!-- Active logs START -->
                        <div class="col-12">
                            <div class="card border">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Active Logs</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-hover">

                                            <!-- Table head -->
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Ip</th>
                                                    <th scope="col" class="border-0">Navigateur</th>
                                                    <th scope="col" class="border-0">Sysème d'exploitation</th>
                                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                <!-- Vérifiez si des activités existent -->
                                                @if ($activities->isEmpty())
                                                    <tr>
                                                        <td colspan="4" class="text-center">No activity logs found</td>
                                                    </tr>
                                                @else
                                                    <!-- Table rows -->
                                                    @foreach ($activities as $activity)
                                                        <tr>
                                                            <td>{{ $activity->ip_address }}</td>
                                                            <td>{{ $activity->browser }}</td>
                                                            <td>{{ $activity->os }}</td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                                    out</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                        {{ $activities->links() }}
                                    </div>
                                    <!-- Table END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Active logs END -->
                    </div>
                </div>
                <!-- Tab content 3 END -->
            </div>
        </div>
    </div>
    <!-- Tabs Content END -->
@endsection
