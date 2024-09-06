@extends('layout-front')

@section('title', 'Contact')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area-contact bg-26">
        <div class="container">
            <div class="page-title-content">
                <h2 class="text-white">Contact</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="text-white">
                            Accueil
                        </a>
                    </li>

                    <li class="active text-white">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.798125880605!2d-3.9981681!3d5.3481492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb707439ce87%3A0xba5cc9ddebdc6b18!2sEDHEC%3B%20Business%20School!5e0!3m2!1sen!2sci!4v1722121039183!5m2!1sen!2sci"></iframe>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2>Comment nous retrouver</h2>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span>Adresse</span>
                                Rue des Bijoutiers, Cocody-Abidjan, Côte d'Ivoire
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>Email</span>
                                <a href=""><span class="__cf_email__"
                                        data-cfemail="81e8efe7eec1f4efe2eeafe2eeec">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <span>Phone</span>
                                <a href="tel:15143125678">+225 27 22 48 78 66</a>
                                <a href="tel:15143125678">+225 07 07 04 31 51</a>
                                <a href="tel:15143125678">+225 05 06 41 42 33</a>
                                <a href="tel:15143125678">+225 07 47 03 58 34</a>
                            </li>
                        </ul>

                        <h3>Suivez-nous sur nos plateformes</h3>

                        <ul class="social-link">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->

    <div style="margin-bottom: 10%" id="nous-ecrire"></div>

    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Ecrivez-nous pour toutes <br> requêtes et suggestions </h2>
                <p>
                    Veuillez remplir le formulaire ci-dessous pour nous contacter, que ce soit pour nous donner
                    l'information de nous rejoindre où l'obtention d'informations, nous nous empresserons de vous répondre
                    dans les plus brefs délais
                </p>

                <div class="text-center-custom mt-5">
                    <sub class="fst-italic fw-light">Les champs suivi d'un </sub><sup class="text-danger">*</sup><sub> sont
                        obligatoires</sub>
                </div>
            </div>

            <form id="contactForm" action="{{ route('contact.send') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Name <sup class="text-danger">*</sup> </label>
                            <input type="text" name="name" id="name" class="form-control" required
                                value="{{ old('name') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Email <sup class="text-danger">*</sup> </label>
                            <input type="email" name="email" id="email" class="form-control" required
                                value="{{ old('email') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Téléphone <sup class="text-danger">*</sup> </label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control"
                                value="{{ old('phone_number') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Sujet <sup class="text-danger">*</sup> </label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                value="{{ old('msg_subject') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Message <sup class="text-danger">*</sup> </label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required>{{ old('message') }}</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="text-center-custom">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group checkboxs">
                                <input type="checkbox" id="chb2" value="{{ old('chb2') }}">
                                <p>Accepter <a href="">Termes & Conditions <sup class="text-danger">*</sup> </a></p>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn" name="submit">
                            <span>Envoyez le message</span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- End Contact Area -->


@endsection
