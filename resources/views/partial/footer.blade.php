<!-- Start Footer Area -->
<footer class="footer-area black-bg-color">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget bg-f9f5f1">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('front/images/logo-head.png') }}" alt="Logo EDHEG" />
                    </a>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                        voluptas animi, minima velit corrupti fugit! Tenetur animi
                        suscipit, reiciendis ad consectetur fugit
                    </p>

                    <ul class="social-icon">
                        <li>
                            <span>Suivez-nous :</span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Liens Usuel</h3>

                    <ul class="import-link">
                        <li>
                            <a href="{{ route('register-online') }}">Inscription en ligne</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}">FAQs</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}">Se connecter</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Architecture</h3>

                    <ul class="import-link">
                        <li>
                            <a href="{{ route('home') }}">GPE EDHEG Abidjan</a>
                        </li>
                        <li>
                            <a href="{{ route('industrielle') }}">Les filières tertiaires</a>
                        </li>
                        <li>
                            <a href="{{ route('tertiaire') }}">Les filières Commerciales</a>
                        </li>
                        <li>
                            <a href="{{ route('event') }}">Les évènements</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Nous retrouver</h3>

                    <ul class="address">
                        <li class="location">
                            <i class="ri-map-pin-line"></i>
                            <span>Address</span>
                            Rue des bijoutiers, Cité des Arts, Cocody - Abidjan
                        </li>
                        <li>
                            <i class="ri-mail-line"></i>
                            <span>Email</span>
                            <a href=""><span class="__cf_email__"></span>infos@gpeedheg-abidjan.ci</span></a>
                        </li>
                        <li>
                            <i class="ri-phone-line"></i>
                            <span>Phone</span>
                            <a href="tel:15143125678">(+225) 27 22 48 78 66</a>
                            <a href="tel:15143125678">(+225) 07 07 04 31 51</a>
                            <a href="tel:15143125678">(+225) 07 47 03 58 34</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area">
    <div class="container">
        <p>
            © GPE-EDHEG Abidjan.
            <script>
                document.write(new Date().getFullYear())
            </script>
            Tous droits réservés.
        </p>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/appear.min.js') }}"></script>
<script src="{{ asset('front/js/odometer.min.js') }}"></script>
<script src="{{ asset('front/js/jarallax.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('front/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/form-validator.min.js') }}"></script>
<script src="{{ asset('front/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>

<script>
    document.getElementById('emailLink').innerHTML =
        '<a href="mailto: ' + 'infos' + '@' + 'gpeedheg-abidjan.ci">infos@gpeedheg-abidjan.ci</a>';
</script>

</body>

</html>
