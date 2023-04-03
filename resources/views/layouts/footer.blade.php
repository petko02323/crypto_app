<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="footer-info">
                        <h3>CryptoApp</h3>
                        <p>
                            {{$spol->sidlo->ulica}} <br>
                            {{$spol->sidlo->mesto}}<br><br>
                            <strong>Tel:</strong> {{$spol->kontakt->tel}}<br>
                            <strong>Email:</strong> {{$spol->kontakt->email}}<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 footer-links">
                    <h4>Užitočné odkazy</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/">Domov</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/blog">Blog</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://www.cryptocompare.com/">Crypto compare</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://cointelegraph.com/">Coin Telegraph</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>CryptoApp</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
<script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<!-- Template Main JS File -->
<script src="{{asset("assets/js/main.js")}}"></script>
<script src="{{asset("assets/js/custom.js")}}" defer></script>
