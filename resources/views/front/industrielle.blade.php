@extends('layout-front')

@section('title', 'Filières Industrielles')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area-info bg-20">
        <div class="container">
            <div class="page-title-content">
                <h2 class="text-white">Filières Industrielles</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="text-white">
                            Accueil
                        </a>
                    </li>

                    <li class="active text-white">Filières Industrielles</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Courses Details Area -->
    <section class="courses-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <h2>FILIÈRES INDUSTRIELLES</h2>

                        <div class="gap-20"></div>

                        <div class="course-odf-bg">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="course-pdf">
                                        <i class="ri-file-pdf-line"></i>
                                        <h3>Informations relatives
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="download-pdf">
                                        <a href="#" class="default-btn">
                                            Téléchargez la fiche
                                            <i class="ri-download-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-20"></div>

                        <h3>Lorem, ipsum dolor.</h3>
                        <p class="text-justify-custom">Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum
                            dolor sit amet, consectetur
                            adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor
                            risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero
                            malesuada feugiat.</p>


                        <ul>
                            <li>Photocopie légalisée du diplôme ou le dernier bulletin</li>
                            <li>Obtenir au moins 160 points au BAC pour les non-bacheliers</li>
                            <li>Un extrait de naissance ou jugement supplétif</li>
                            <li>Photocopie de la CNI ou une attestation d'identité</li>
                            <li>Quatre photos d'identité du même tirage</li>
                            <li>Chemise à rabat bleu</li>
                            <li>Un certificat de nationalité</li>
                        </ul>

                        <div class="gap-20"></div>

                        <h3>Lorem, ipsum.</h3>
                        <p class="text-justify-custom">Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                            Curabitur aliquet quam id dui
                            posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed
                            magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                            nec, egestas non nisi. Vivamus suscipit tortor.</p>

                        <div class="gap-20"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="courses-sidebar ml-15">
                        <div class="courses-single-sidebar mb-0">
                            <h3>Informations relatives</h3>

                            <ul>
                                <li>
                                    Modes of study
                                    <span>Attendance</span>
                                </li>
                                <li>
                                    Duration
                                    <span>3 years full-time</span>
                                </li>
                                <li>
                                    Academic direction
                                    <span>UK</span>
                                </li>
                                <li>
                                    Method
                                    <span>On Campus</span>
                                </li>
                                <li>
                                    Campus
                                    <span>Wales</span>
                                </li>
                                <li>
                                    Booked Slot
                                    <span>0</span>
                                </li>
                                <li>
                                    Start dates
                                    <span>1st Semester - May</span>
                                </li>
                                <li>
                                    Fees (first year)
                                    <span>$22,350</span>
                                </li>
                                <li>
                                    Language
                                    <span>English</span>
                                </li>
                                <li>
                                    Seats avilable
                                    <span>90</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Details Area -->
@endsection
