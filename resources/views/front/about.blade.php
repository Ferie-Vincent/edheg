@extends('layout-front')

@section('title', 'Accueil')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>GPE-EDHEG</h2>

                <ul>
                    <li>
                        <a href="index.php">
                            Accueil
                        </a>
                    </li>

                    <li class="active">Nous concernant</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Stat About Area -->
    <section class="about-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="about-img-two mr-15">
                        <img src="{{ asset('front/images/about/about.jpg') }}" alt="EDHEG"
                            class="img-fluid rounded shadow">

                        <div class="about-shape">
                            <img src="assets/images/about-shape.png" alt="GPE-EDHEG">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
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
                    </div>
                </div>

                <div class="col-xl-12 my-5">
                    <div class="about-content">
                        <p class="mb-0 text-center-custom">
                            Aussi, le Groupe a son propre Cabinet de placement dénommé <span
                                style="display: inline !important; font-weight: bold" class="spancolor">NIMBA
                                CONSULTING</span>, un cabinet agréé par le FDFPP<br>

                            <img class="img-fluid w-75 d-block mx-auto mt-5 rounded"
                                src="{{ asset('front/images/nimba.jpg') }}" alt="Cabinet Nimba consulting">

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-4 col-md-6">
                    <div class="single-costing-card shadow">
                        <h3>EDHEG - Abidjan</h3>

                        <hr class="my-3 hr-custom">

                        <p> Sise COCODY CITE DES ARTS,
                            FACE EGLISE UEESO - Rue C42
                            </span>
                        </p>

                        <p>
                            Tél : +225 22 48 78 66 <br> Fax : +225 22 44 59 71 <br>
                            Mobile : +225 05 06 05 41 42 / +225 07 47 03 58 34
                        </p>

                        <p>Adresse : 25 BP 1726 ABIDJAN 25</p>

                        <p>Site Web : https://gpeedheg-abidjan.ci</p>

                        <p>Email : infos@gpeedheg-abidjan.ci</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-costing-card shadow">
                        <h3>EDHEG - Bouaké</h3>

                        <hr class="my-3 hr-custom">

                        <p> Sise BOUAKE, AU QUARTIER
                            COMMERCE, FACE BHCI

                            </span>
                        </p>

                        <p>
                            Tél : +225 27 31 63 71 63 <br>
                            Mobile : +225 07 48 07 65 45 <br> +225 07 07 56 82 09
                        </p>

                        <p>
                            Adresse : 01 BP 1104 BOUAKE 01
                        </p>

                        <p>Site Web : https://gpeedheg-abidjan.ci</p>

                        <p>Email : tdiabagate08@gmail.com</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-costing-card shadow">
                        <h3>EDHEG - San Pedro</h3>

                        <hr class="my-3 hr-custom">

                        <p> Sise QUARTIER NITORO – NON LOIN DE BUREAU VERITAS
                            (Ancien Lycée Français)

                            </span>
                        </p>

                        <p>
                            Tél : +225 34 71 20 38 <br>
                            Mobile : +225 07 07 77 13 84 <br> +225 07 08 71 48 39
                        </p>

                        <p>
                            Adresse : 01 BP 851 SAN PEDRO 01
                        </p>

                        <p>Site Web : https://gpeedheg-abidjan.ci</p>

                        <p>Email : edhecsanpedro@gmail.com</p>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End About Area -->

    <section class="campus-information-area pb-100">
        <div class="container">
            <div class="main-default-content">
                <h3 class="title spancolor text-center-custom">
                    ORGANIGRAMME DE L'ÉTABLISSEMENT</h3>

                <div class="gap-20"></div>

                <img src="{{ asset('front/images/organigramme.png') }}" alt="Organigramme GPE-EDHEG - 2024"
                    style="margin-left: -3%">


                <h1 class="title text-center-custom my-4 py-5">Organigramme du Groupe EDHEG-Abidjan</h1>
            </div>
            {{--
            <hr class="hr-custom my-5">

            <div class="col-12 text-center-custom">
                <button class="default-btn register mb-0" type="submit" control-id="ControlID-5">
                    Téléchargez le Réglément intérieur ici <i class="ri-file-download-line"></i>
                </button>
                <button class="default-btn register mb-0" type="submit" control-id="ControlID-5">
                    Téléchargez le Guide l'étudiant <i class="ri-download-line"></i>
                </button>
            </div> --}}
        </div>

    </section>
    <!-- End Campus information Area -->


@endsection
