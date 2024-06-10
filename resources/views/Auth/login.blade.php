<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from booking.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2024 10:41:43 GMT -->

<head>
    <title>Connexion - Matuacm - Première plateforme de covoiturage au Cameroun</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Content START -->
        <section class="vh-xxl-100">
            <div class="container h-100 d-flex px-0 px-sm-4">
                <div class="row justify-content-center align-items-center m-auto">
                    <div class="col-12">
                        <div class="bg-mode shadow rounded-3 overflow-hidden">
                            <div class="row g-0">
                                <!-- Vector Image -->
                                <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                                    <div class="p-3 p-lg-5">
                                        <img src="{{ asset('assets/images/element/signin.svg') }}" alt="">
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr opacity-1 d-none d-lg-block"></div>
                                </div>

                                <!-- Information -->
                                <div class="col-lg-6 order-1">
                                    <div class="p-4 p-sm-7">
                                        <!-- Logo -->
                                        <a href="{{ route('index') }}">
                                            <img class="h-50px mb-4" src="{{ asset('assets/images/logo-icon.svg') }}"
                                                alt="logo">
                                        </a>
                                        <!-- Title -->
                                        <h1 class="mb-2 h3">Heureux de vous revoir!!</h1>
                                        <p class="mb-0">Pas de compte?<a href="{{ route('register') }}"> Créer votre
                                                compte</a></p>

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show col-12 text-center mx-auto"
                                                role="alert">
                                                <i class="fa fa-info fs-5"></i>  {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <!-- Form START -->
                                        <form class="mt-4 text-start" method="POST"
                                            action="{{ route('login.store') }}">
                                            @csrf

                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Email ou Téléphone</label>
                                                <input type="text"
                                                    class="form-control @error('login') is-invalid @enderror"
                                                    name="login" value="{{ old('login') }}">
                                                @error('login')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Mot de passe -->
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Mot de passe</label>
                                                <input
                                                    class="form-control fakepassword @error('password') is-invalid @enderror"
                                                    type="password" id="psw-input" name="password">
                                                <span
                                                    class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Se souvenir de moi et Mot de passe oublié -->
                                            <div class="mb-3 d-sm-flex justify-content-between">
                                                <div>
                                                    <input type="checkbox" class="form-check-input" id="rememberCheck">
                                                    <label class="form-check-label" for="rememberCheck">Se souvenir de
                                                        moi?</label>
                                                </div>
                                                <a href="#">Mot de passe oublié?</a>
                                            </div>

                                            <!-- Bouton de connexion -->
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary w-100 mb-0">Connexion</button>
                                            </div>

                                            <!-- Divider -->
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p
                                                    class="small bg-mode position-absolute top-50 start-50 translate-middle px-2">
                                                    Ou Connectez-vous avec</p>
                                            </div>

                                            <!-- Boutons de connexion avec Google et Facebook -->
                                            <div class="vstack gap-3">
                                                <a href="#" class="btn btn-light mb-0">
                                                    <i
                                                        class="fab fa-fw fa-google text-google-icon me-2"></i>Connectez-vous
                                                    avec Google</a>
                                                <a href="#" class="btn btn-light mb-0">
                                                    <i
                                                        class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Connectez-vous
                                                    avec Facebook</a>
                                            </div>

                                            <!-- Copyright -->
                                            <div class="text-primary-hover text-body mt-3 text-center">
                                                Copyrights ©2024 Matua.cm. Build by <a
                                                    href="https://www.th-consulting.com/"
                                                    class="text-body">THConsulting</a>.
                                            </div>
                                        </form>

                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Main Content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
