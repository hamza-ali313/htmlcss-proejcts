<footer>
    <div class="container">
        <div class="row align-items-center gap-4">
            <div class="col-12 col-lg-4">
                <div class="foot-logo">
                    <a href="index.php"><img src="images/logo.png"></a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium dolores libero incidunt.
                    </p>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Book A Table</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="quick-links">
                    <h3>Boba Menu</h3>
                    <ul>
                        <li><a href="#">Mocha</a></li>
                        <li><a href="#">Blueberry</a></li>
                        <li><a href="#">Strawberry</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="quick-links">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="tel:1-234-56789"><i class="fas fa-phone-alt"></i>1-234-56789</a></li>
                        <li><a href="mailto:bobayour@email.com"><i class="fas fa-envelope"></i>bobayour@email.com</a>
                        </li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i>Lorem ipsum simply dummy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="copy-right">
        <div class="container text-center">
            <p class="">BOBA CATS 2023. ALL RIGHTS RESERVED</p>
        </div>
    </div>
</footer>




<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/fancybox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/custom.js"></script>
</body>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".main-haeder .navbar-nav #service").hover(
            function () {
                // On hover-in, show the dropdown
                jQuery(this).find(".dropdown-cus").slideDown();
            },
            function () {
                // On hover-out, hide the dropdown
                jQuery(this).find(".dropdown-cus").slideUp();
            }
        );
    });
</script>

</html>