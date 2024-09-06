@extends('layout-front')

@section('title', 'Évènement')

@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area-event bg-20">
        <div class="container">
            <div class="page-title-content">
                <h2 class="text-white">Évènements</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="text-white">
                            Accueil
                        </a>
                    </li>

                    <li class="active text-white">Évènement</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Event Details Area -->
    <section class="event-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <span class="top-title"> {{ $lastEvent->type }} </span>
                        <h2>{{ $lastEvent->title }}</h2>

                        <ul class="date-time">
                            <li>
                                <i class="ri-calendar-2-line"></i>
                                {{ $lastEvent->start_date }}
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                {{ $lastEvent->start_time }}
                            </li>
                            <li>
                                <i class="ri-map-pin-2-line"></i>
                                {{ $lastEvent->localisation }}
                            </li>
                        </ul>

                        <div class="gap-20"></div>

                        <div class="text-center-custom">
                            <img src="{{ asset('storage/' . $lastEvent->image) }}" alt="Image" class="rounded">
                        </div>

                        <div class="gap-20"></div>

                        <h3>Description de l'évènement</h3>

                        <p class="text-justify-custom">{{ $lastEvent->description }}</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>Informations</h3>

                            <ul>
                                <li>
                                    Début :
                                    <span>
                                        {{ $lastEvent->start_date }}
                                    </span>
                                </li>
                                <li>
                                    Fin :
                                    <span>
                                        {{ $lastEvent->end_date }}
                                    </span>
                                </li>
                                <li>
                                    Cétégorie
                                    <span>
                                        {{ $lastEvent->type }}
                                    </span>
                                </li>
                                <li>
                                    Localisation :
                                    <span>
                                        {{ $lastEvent->localisation }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-5 mx-auto spancolor w-50 ">

                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>Le Formateur</h3>

                            <ul>
                                <li>
                                    Nom & Prénoms :
                                    <span>
                                        {{ $lastEvent->formateur }}
                                    </span>
                                </li>
                                <li>
                                    Fonction :
                                    <span>1
                                        {{ $lastEvent->emploi }}
                                    </span>
                                </li>
                                <li>
                                    Structure
                                    <span>
                                        {{ $lastEvent->societe_actuelle }}
                                    </span>
                                </li>
                                <li>
                                    Profil LinkedIn:
                                    <span>
                                        <a href="{{ $lastEvent->linked }}" target="_blank">
                                            Son Profil
                                        </a>

                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Event Details Area -->


@endsection
