@extends('layout-front')

@section('title', 'M\enregistrer')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Inscription</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Accueil
                        </a>
                    </li>

                    <li class="active">Inscription</li>
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

                <form class="user-form" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <h3>Renseingez vos identifiants</h3>

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                            <div class="form-group">
                                <label>Confirmation du mot de passe</label>
                                <input class="form-control" type="password" name="password_confirmation"
                                    autocomplete="new-password" id="password_confirmation">
                                @error('password_confirmation')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Connexion
                            </button>
                        </div>

                    </div>
                </form>

            </div>
    </section>
    <!-- End User Area -->



@endsection
