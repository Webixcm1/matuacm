<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from booking.webestica.com/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2024 10:41:44 GMT -->

<head>
    <title>Matuacm :: Inscription</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="matuacm">
    <meta name="description" content="">


    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

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

        <!-- =======================Main Content START -->
        <section class="vh-xxl-100">
            <div class="container h-100 d-flex px-0 px-sm-4">
                <div class="row justify-content-center align-items-center m-auto">
                    <div class="col-12">
                        <div class="bg-mode shadow rounded-3 overflow-hidden">
                            <div class="row g-0">
                                <!-- Vector Image -->
                                <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
                                    <div class="p-3 p-lg-5">
                                        <img src="{{ asset('assets/images/element/signup.jpg') }}" alt="">
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr opacity-1 d-none d-lg-block"></div>
                                </div>

                                <!-- Information -->
                                <div class="col-lg-6 order-1">
                                    <div class="p-4 p-sm-6">
                                        <!-- Logo -->
                                        <a href="{{ route('index') }}">
                                            <img class="h-50px mb-4" src="{{ asset('assets/images/logo-icon.svg') }}"
                                                alt="logo">
                                        </a>
                                        <!-- Title -->
                                        <h1 class="mb-2 h3">Créer votre compte</h1>
                                        <p class="mb-0">Vous êtes déjà membre?<a
                                                href="{{ route('login') }}">Connectez-vous</a></p>

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show col-12 text-center mx-auto"
                                                role="alert">
                                                <i class="fa fa-info fs-5"></i> <strong>Erreur !</strong> Erreur lors de
                                                la création de votre compte
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <!-- Form START -->
                                        <form class="mt-4 text-start" method="POST"
                                            action="{{ route('register.store') }}">
                                            @csrf
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Phone -->
                                            <div class="mb-3">
                                                <label class="form-label">Téléphone</label>
                                                <input type="text"
                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                    name="telephone" value="{{ old('telephone') }}">
                                                @error('telephone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Type -->
                                            <div class="mb-3">
                                                <label class="form-label">Vous êtes?</label>
                                                <select name="type"
                                                    class="form-control @error('type') is-invalid @enderror">
                                                    <option value="conducteur"
                                                        {{ old('type') == 'conducteur' ? 'selected' : '' }}>Conducteur
                                                    </option>
                                                    <option value="passager"
                                                        {{ old('type') == 'passager' ? 'selected' : '' }}>Passager
                                                    </option>
                                                </select>
                                            </div>

                                            <!-- Password -->
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
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label class="form-label">Confirmez le mot de passe</label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    id="password_confirmation">
                                            </div>
                                            <!-- Remember me -->
                                            <div class="mb-3">
                                                <input type="checkbox"
                                                    class="form-check-input @error('terms') is-invalid @enderror"
                                                    id="rememberCheck" name="terms">
                                                <label class="form-check-label" for="rememberCheck">En créant votre
                                                    compte vous accepter notre <a href="#">CGU</a>.</label>

                                                @error('terms')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- Button -->
                                            <div><button type="submit"
                                                    class="btn btn-primary w-100 mb-0">Inscription</button></div>

                                            <!-- Divider -->
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p
                                                    class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">
                                                    Ou Connectez-vous avec</p>
                                            </div>

                                            <!-- Google and facebook button -->
                                            <div class="vstack gap-3">
                                                <a href="#" class="btn btn-light mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon me-2"></i>Connectez-vous
                                                    avec Google</a>
                                                <a href="#" class="btn btn-light mb-0"><i
                                                        class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Connectez-vous
                                                    avecFacebook</a>
                                            </div>

                                            <!-- Copyright -->
                                            <div class="text-primary-hover text-body mt-3 text-center"> Copyrights
                                                ©2024
                                                Matua.cm. Build by<a href="https://www.th-consulting.com/"
                                                    class="text-body">THConsulting</a>. </div>
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
