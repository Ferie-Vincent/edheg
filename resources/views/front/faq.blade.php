@extends('layout-front')

@section('title', 'Foires aux Questions')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area-faq bg-13">
        <div class="container">
            <div class="page-title-content">
                <h2 class="text-white">FAQs</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="text-white">
                            Accueil
                        </a>
                    </li>

                    <li class="active text-white">Foire aux questions</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Foires aux questions</h2>
            </div>

            <div class="faq-bg">
                <div class="faq-accordion">
                    <ul class="accordion">


                        @foreach ($faqs as $index => $faq)
                            <li class="accordion-item">

                                <a class="accordion-title ">
                                    <i class="ri-add-line"></i>
                                    0{{ $index + 1 }}. {{ $faq->question }}
                                </a>

                                <div class="accordion-content {{ $index + 1 == 1 ? 'show' : '' }}">
                                    <p class="accordion-text mb-0 text-justify-custom">
                                        {!! $faq->response !!}
                                    </p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Stat FAQ Contact Area -->
    <section class="faq-contact-area pb-100">
        <div class="container">
            <div class="contact-from-bg">
                <div class="section-title">
                    <h2>D'autres questions ?</h2>
                </div>

                <div class="contact-form">
                    <form id="contactForm" action="{{ route('faq.send') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Entrez votre nom svp!" placeholder="Nom & Prénoms">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Entrez votre mail svp!" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                        data-error="Entrez votre message svp!" placeholder="Votre question"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn" name="submit">
                                    Soumettre ma quesiton
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Contact Area -->


@endsection
