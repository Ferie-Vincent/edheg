@extends('layout-front')

@section('title', 'Mot de passe oublié')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Mot de passe oublié</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Accueil
                        </a>
                    </li>

                    <li class="active">Espace connexion</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start User Area -->
    <section class="user-area ptb-100">
        <div class="container">
            <div class="user-form-content max-width-600">

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form class="user-form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <p class="text-center-custom fw-bold">Mot de passe oublié ? Pas de soucis. Entrer simplement votre
                        adresse
                        email, et nous vous
                        enverrons un lien pour reinitialiser votre mot de passe.</p>
                    <h3></h3>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')"autofocus autocomplete="username">
                            </div>
                            @error('email')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Réinitialiser mon mot da passe par lien
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">
                                <a href="{{ route('login') }}#nous-ecrire">Connectez-vous</a>
                            </p>
                        </div>
                    </div>
                </form>

            </div>
    </section>
    <!-- End User Area -->

@endsection
