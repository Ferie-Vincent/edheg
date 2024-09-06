@extends('layout-front')

@section('title', 'Connexion')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Connexion</h2>

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

                <form class="user-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <h3>Renseingez vos identifiants</h3>

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
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input class="form-control" type="password" name="password" autocomplete="current-password"
                                    id="password">
                                @error('password')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="login-action">
                                <span class="log-rem">
                                    <input input id="remember_me" type="checkbox" name="remember">
                                    <label>Garder ma session active</label>
                                </span>

                                <span class="forgot-login">
                                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Connexion
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Vous n'avez pas d'identifiants ? <br>
                                <a href="{{ route('contact') }}#nous-ecrire">Écrivez nous </a>
                            </p>
                        </div>
                    </div>
                </form>

            </div>
    </section>
    <!-- End User Area -->

@endsection
