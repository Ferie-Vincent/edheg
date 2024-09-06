@extends('layout-front')

@section('title', 'Accueil')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>Bienvenu à EDHEG</span>
                                <h1>
                                    Une nouvelle vision de la formation en Gestion avec le GPE EDHEG-Abidjan
                                </h1>

                                <div class="banner-btn">
                                    <a href="{{ route('contact') }}#nous-ecrire" class="default-btn">
                                        Nous rejoindre en nous écrivant
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img src="{{ asset('storage/uploads/accueil/' . $accueil->image) }}" alt="Image"
                                    class="img-fluid rounded" style="max-width: 100%; height: auto;"
                                    onerror="this.onerror=null; this.src='https://placehold.co/825x850';">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Banner Area -->

    <!-- Stat About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img mr-15">
                        <img src="{{ asset('storage/uploads/about/' . $about->image) }}" alt="Image"
                            class="img-fluid rounded" style="max-width: 100%; height: auto;"
                            onerror="this.onerror=null; this.src='https://placehold.co/700x500';">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <span>Nous concernant</span>
                        <h2>Le Groupe Ecole des Hautes Etudes Commerciales-Abidjan (GPE-EDHEG)</h2>

                        <p class="mb-0 text-justify-custom">
                            Créé en Novembre 2004, le Groupe EDHEG-Abidjan est constitué de trois (03) écoles aujourd'hui à
                            savoir :
                            <br>
                            <strong class="spancolor">
                                EDHEG-Abidjan </strong>, <strong class="spancolor">EDHEG-Bouaké</strong> et
                            <strong class="spancolor">EDHEG-San Pedro</strong>.
                            <br>

                            Le Groupe EDHEG-Abidjan est spécialisé dans la formation:
                            des Commerciaux, des Gestionnaires d’Entreprise, des Juristes d’Entreprise, des Comptables et
                            Financiers et des Informaticiens. <br>

                            Il a pour vocation de former des Cadres gestionnaires et Dirigeants d’entreprise via une
                            formation polyvalente et opérationnelle de haut niveau et une préparation aux métiers de
                            décideurs à travers des séminaires, alternance école- entreprise, stages de fin d’étude.
                        </p>

                        <a href="{{ route('about') }}" class="default-btn">
                            en savoir plus
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Study Area -->
    <section class="study-area pt-100 pb-70">
        <div class="container">
            <div class="section-title white-title">
                <h2>Découvrez nos cours enseignés</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="study-slider owl-carousel owl-theme">
                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Gestion commerciale, logistique internationale</a>
                        </h3>

                    </div>

                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Finance comptabilité et Gestion des entreprises</a>
                        </h3>

                    </div>

                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Réseaux informatiques, telecommunications</a>
                        </h3>

                    </div>

                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Ressources <br> Humaines et communication</a>
                        </h3>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Ingénieur commercial / Management par la qualité</a>
                        </h3>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-book"></i>
                        <h3>
                            <a>Ingénieur commercial / Audit et contrôle de gestion</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Study Area -->

    <!-- Start Our Campus Information Area -->
    <section class="our-campus-information-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="campus-img">
                        <img src="{{ asset('storage/uploads/owner/' . $owner->image) }}" alt="Image"
                            class="img-fluid rounded" style="max-width: 100%; height: auto;"
                            onerror="this.onerror=null; this.src='https://placehold.co/700x500';">
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="campus-content">
                        <span>Le Fondateur</span>
                        <h2>
                            Lorem, ipsum dolor sit amet.
                        </h2>
                        <p>
                            Curabitur aliquet quam id dui posuere blandit. Praesent sapien
                            massa, convallis a pellentesque nec, egestas non nisi. Donec
                            rutrum congue leo eget malesuada.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore adipisci cupiditate
                            accusantium, quasi vero magnam sunt, temporibus, quam reiciendis pariatur distinctio obcaecati.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Campus Information Area -->

    <!-- Start Simple Steps Area -->
    <section class="simple-steps-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Comment s'inscrire au <br> GPE-EDHEG</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna
                </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-search"></i>
                        <h3>1. </h3>
                        <p>
                            Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod
                            tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-choosing"></i>
                        <h3>2. </h3>
                        <p>
                            Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod
                            tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-contract"></i>
                        <h3>3. </h3>
                        <p>
                            Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod
                            tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-presentation"></i>
                        <h3>4. </h3>
                        <p>
                            Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod
                            tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Simple Steps Area -->

    <!-- Start Events Area -->
    <section class="events-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="events-content mr-15">
                        <span>Nos Évènements</span>
                        <h2>Évènements réalisés</h2>

                        <ul class="events-list">
                            <li>
                                <div class="events-date">
                                    <span class="mb-2">01 Mars</span>
                                    <span>2024</span>
                                </div>

                                <span>Séminaire</span>
                                <h3>
                                    <a>
                                        Lorem ipsum dolor sit.
                                    </a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>

                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">02 Mar</span>
                                    <span>2024</span>
                                </div>

                                <span>Journée culturelle</span>
                                <h3>
                                    <a>
                                        Lorem ipsum dolor sit amet.
                                    </a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>

                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">03 Mar</span>
                                    <span>2024</span>
                                </div>

                                <span>Conférence</span>
                                <h3>
                                    <a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="events-timer ml-15">
                        <a href="{{ route('event') }}">

                            <div class="event-img">
                                <img src="{{ asset('storage/' . $latestEvent->image) }}" alt="Image"
                                    class="img-fluid rounded" style="max-width: 100%; height: auto;"
                                    onerror="this.onerror=null; this.src='https://placehold.co/650x650';">
                            </div>
                        </a>

                        {{-- <span>Prochain évènement dans </span> --}}

                        {{-- Custom.js -> function makeTimer() --}}
                        {{-- <div id="timer">
                            <div id="days"></div>
                            <div id="hours"></div>
                            <div id="minutes"></div>
                            <div id="seconds"></div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Area -->

    <!-- Stat Admission Area -->
    <section class="admission-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="admission-img mr-15">
                        <img src="{{ asset('storage/uploads/admissions/' . $admissions->image) }}" alt="Image"
                            class="img-fluid rounded" style="max-width: 100%; height: auto;"
                            onerror="this.onerror=null; this.src='https://placehold.co/700x500';">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="admission-content ml-15">
                        <span>Les admissions au GPE-EDHEG Abidjan</span>
                        <h2>
                            Comment être admis au GPE-EDHEG
                        </h2>
                        <p class="text-justify-custom">
                            Pour nous rejoindre au GPE-EDHEC, l'admission se fait par entretien avec un jury, après l'étude
                            approfondie des dossiers soumis. Les documents à fournir sont les suivants :
                        <ul class="list">
                            <li>Une photocopie légalisée du diplôme</li>
                            <li>Un extrait d'acte de naissance ou jugement supplétif</li>
                            <li>Une photocopie de la CNI ou une attestation d'identité</li>
                            <li>Quatre photos d'identité de même tirage</li>
                            <li>Un certificat de scolarité</li>
                            <li>Un paquet de ramettes</li>
                            <li>Un paquet de marqueurs pour tableau blanc (10 marqueurs)</li>
                            <li>Un certificat de nationalité</li>
                            <li>Ainsi que la fiche du Ministère dûment remplie</li>
                        </ul>
                        </p>

                        <a class="default-btn">
                            Procéder à mon inscription en ligne
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Admission Area -->

    <!-- Start Find A Courses Area -->
    <section class="counter-area bg-color-f8fafb pt-100 pb-70">
        <div class="container">
            <div class="counter-bg">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduated"></i>

                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="1517">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">4</span></span></span></span></span><span
                                            class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">5</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">7</span></span></span></span></span>
                                    </div>
                                </span>
                            </h2>
                            <h4>Auditeurs</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-teacher"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="64">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h2>
                                <h4>Professeurs</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-book-1"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="24">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h2>
                                <h4>Cours</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduation-cap"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer odometer-auto-theme" data-count="10">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">9</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h2>
                                <h4>Filières</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape counter-shape-1">
                    <img src="{{ asset('front/images/counter-shape-1.png') }}" alt="Image">
                </div>
                <div class="shape counter-shape-2">
                    <img src="{{ asset('front/images/counter-shape-2.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!-- End Find A Courses Area -->

    <div class="gap-20"></div>

    <section class="team-area team-area-three pb-70 mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Quelques uns de nos <br> Professeurs émérites</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna</p>
            </div>

            <div class="row justify-content-md-center">

                @foreach ($profs as $prof)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-member">
                            <img src="{{ asset('storage/' . $prof->image) }}" alt="Image"
                                class="img-fluid shadow rounded">

                            <div class="team-content">
                                <div class="team-name">
                                    <h3>{{ $prof->nom }}</h3>
                                    <span>{{ $prof->niveau }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="row my-5">
                {{-- <div class="col-12">
                    <div class="study-load">
                        <a href="{{ route('professeurs') }}" class="default-btn">
                            voir la liste de nos professeurs
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Start Campus Experience Area -->
    <section class="campus-experience-area ptb-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="logistics-solutions-img bg-2">
                        <div class="video-button">
                            <h1 class="text-white">TÉMOIGNAGES</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campus-experience-slider owl-carousel owl-theme">

                        @foreach ($testimonials as $testimonial)
                            <div class="single-campus-experience">
                                <h3>{{ $testimonial->name }}</h3>
                                <p>
                                    {{ $testimonial->comment }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Campus Experience Area -->

    <section class="application-submit-area mt-5 pt-5 pb-5">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h2>Prêt à nous rejoindre ?</h2>
                            {{-- <a href="{{ route('register-online') }}" class="default-btn">
                                Je m'inscris
                                <i class="ri-arrow-right-line"></i>
                            </a> --}}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="application-submit-img">
                            <img src="https://placehold.co/265x406" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
