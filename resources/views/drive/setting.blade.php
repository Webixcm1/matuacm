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
                                class="fas fa-user-circle fa-fw me-2"></i>Paramètre du Compte</a> </li>
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
                                    <h5 class="card-header-title">Modification du Profile</h5>
                                </div>
                                <div class="card-body">

                                    <form action="" method="post">
                                        <!-- Nom -->
                                        <div class="mb-3">
                                            <label class="form-label">Nom</label>
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                                value="{{ Auth::user()->nom }}" name="nom">
                                            @error('nom')
                                                <span class="text-danger">Ce champ est obligatoire</span>
                                            @enderror
                                        </div>

                                        <!-- Prenom -->
                                        <div class="mb-3">
                                            <label class="form-label">Prenom</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->prenom }}"
                                                name="@error('prenom') is-invalid @enderror">
                                            @error('prenom')
                                                <span class="text-danger">Ce champ est obligatoire</span>
                                            @enderror
                                        </div>
                                        <!-- Profile picture -->
                                        <div class="mb-3">
                                            <label class="form-label">Avatar</label>
                                            <!-- Avatar upload START -->
                                            <div class="d-flex align-items-center">
                                                <label class="position-relative me-4" for="uploadfile-1"
                                                    title="Replace this pic">
                                                    <!-- Avatar place holder -->
                                                    <span class="avatar avatar-xl">
                                                        <img id="uploadfile-1-preview"
                                                            class="avatar-img rounded-circle border border-white border-3 shadow"
                                                            src="{{ asset(Auth::user()->avatar) }}" alt="avatar">
                                                    </span>
                                                </label>
                                                <!-- Upload button -->
                                                <label class="btn btn-sm btn-primary-soft mb-0"
                                                    for="uploadfile-1">Change</label>
                                                <input id="uploadfile-1" class="form-control d-none" type="file">
                                            </div>
                                            <!-- Avatar upload END -->
                                        </div>
                                        <!-- Email id -->
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                                disabled>
                                        </div>
                                        <!-- Mobile number -->
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone</label>
                                            <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                                value="{{ Auth::user()->telephone }}" name="telephone">
                                            @error('telephone')
                                                <span class="text-danger">Ce champ est obligatoire</span>
                                            @enderror
                                        </div>
                                        <!-- Location -->
                                        <div class="mb-3">
                                            <label class="form-label">Adresse</label>
                                            <input class="form-control" type="text"
                                                value="{{ Auth::user()->conducteur->adresse }}" name="adresse">
                                        </div>
                                        <!-- City -->
                                        <div class="mb-3">
                                            <label class="form-label">Ville</label>
                                            <input class="form-control" type="text"
                                                value="{{ Auth::user()->conducteur->ville }}">
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
                                <form class="card-body">
                                    <!-- Email -->
                                    <label class="form-label">Entrer la nouvelle adresse email</label>
                                    <input type="email" class="form-control" placeholder="test@test.com">

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
                                <form class="card-body">
                                    <!-- Current password -->
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe actuel</label>
                                        <input class="form-control" type="password" placeholder="mot de passe actuel">
                                    </div>
                                    <!-- New password -->
                                    <div class="mb-3">
                                        <label class="form-label">Nouveau mot de passe</label>
                                        <div class="input-group">
                                            <input class="form-control fakepassword" type="password" id="psw-input"
                                                placeholder="nouveau mot de passe">
                                            <span class="input-group-text p-0 bg-transparent">
                                                <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                            </span>
                                        </div>
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
                        <!-- Security settings START -->
                        <div class="col-12">
                            <div class="card border">
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Security settings</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Two step -->
                                    <form class="mb-3">
                                        <h6>Two-factor authentication</h6>
                                        <label class="form-label">Add a phone number to set up two-factor
                                            authentication</label>
                                        <input type="text" class="form-control mb-2"
                                            placeholder="Enter your mobile number">
                                        <button class="btn btn-sm btn-primary mb-0">Send Code</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Security settings END -->

                        <!-- Linked account START -->
                        <div class="col-lg-6">
                            <div class="card border rounded-3">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Linked account</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body pb-0">
                                    <!-- Google -->
                                    <div
                                        class="position-relative mb-4 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i></h2>
                                        <div>
                                            <div
                                                class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                            </div>
                                            <h6 class="mb-1">Google</h6>
                                            <p class="mb-1 small">You are successfully connected to your Google account</p>
                                            <!-- Button -->
                                            <button type="button" class="btn btn-sm btn-danger mb-0">Invoke</button>
                                            <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                        </div>
                                    </div>

                                    <!-- Linkedin -->
                                    <div class="mb-4 d-sm-flex border p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-linkedin-in text-linkedin"></i></h2>
                                        <div>
                                            <h6 class="mb-1">Linkedin</h6>
                                            <p class="mb-1 small">Connect with Linkedin account for a personalized
                                                experience</p>
                                            <!-- Button -->
                                            <button type="button" class="btn btn-sm btn-primary mb-0">Connect
                                                Linkedin</button>
                                            <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                        </div>
                                    </div>

                                    <!-- Facebook -->
                                    <div class="mb-4 d-sm-flex border p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i></h2>
                                        <div>
                                            <h6 class="mb-1">Facebook</h6>
                                            <p class="mb-1 small">Connect with Facebook account for a personalized
                                                experience</p>
                                            <!-- Button -->
                                            <button type="button" class="btn btn-sm btn-primary mb-0">Connect
                                                Facebook</button>
                                            <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Linked account END -->

                        <!-- Social account END -->
                        <div class="col-lg-6">
                            <div class="card border rounded-3">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Social media profile</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Facebook username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>Enter
                                            facebook username</label>
                                        <input class="form-control" type="text" value="loristev"
                                            placeholder="Enter username">
                                    </div>

                                    <!-- Twitter username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-twitter text-twitter me-2"></i>Enter
                                            twitter username</label>
                                        <input class="form-control" type="text" value="loristev"
                                            placeholder="Enter username">
                                    </div>

                                    <!-- Instagram username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i
                                                class="fab fa-instagram text-instagram-gradient me-2"></i>Enter instagram
                                            username</label>
                                        <input class="form-control" type="text" value="loristev"
                                            placeholder="Enter username">
                                    </div>

                                    <!-- Youtube -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-youtube text-youtube me-2"></i>Add your
                                            youtube profile URL</label>
                                        <input class="form-control" type="text"
                                            value="https://www.youtube.com/in/Booking-05620abc"
                                            placeholder="Enter username">
                                    </div>

                                    <!-- Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-primary mb-0">Save change</button>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Social account END -->

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
                                                    <th scope="col" class="border-0 rounded-start">Browser</th>
                                                    <th scope="col" class="border-0">IP</th>
                                                    <th scope="col" class="border-0">Time</th>
                                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                <!-- Table row -->
                                                <tr>
                                                    <td> Chrome On Window </td>
                                                    <td> 173.238.198.108 </td>
                                                    <td> 12 Nov 2021 </td>
                                                    <td> <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                            out</button> </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <td> Mozilla On Window </td>
                                                    <td> 107.222.146.90 </td>
                                                    <td> 08 Nov 2021 </td>
                                                    <td> <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                            out</button> </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <td> Chrome On iMac </td>
                                                    <td> 231.213.125.55 </td>
                                                    <td> 06 Nov 2021 </td>
                                                    <td> <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                            out</button> </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <td>Mozilla On Window </td>
                                                    <td> 37.242.105.138 </td>
                                                    <td> 02 Nov 2021 </td>
                                                    <td> <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                                            out</button> </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                    </div>
                                    <!-- Table END -->

                                    <!-- Active session -->
                                    <form class="mt-4">
                                        <h6 class="mb-0">Active sessions</h6>
                                        <p class="mb-2">Selecting "Sign out" will sign you out from all devices except
                                            this one. This can take up to 10 minutes.</p>
                                        <button class="btn btn-sm btn-danger mb-0">Sign Out of all devices</button>
                                    </form>
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
