<!-- premium soccer official sec start -->

<!-- premium soccer official sec end -->
<footer>
    <div class="foot-upper">
        <div class="container">
            <div class="newsletter">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form action="">
                            <input placeholder="search here" class="d-block">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-sm-6 col-md-6 col-md-6 col-sm-6">
                    <div class="foot-logo">
                        <img src="images/logo.png">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium dolores libero
                            incidunt.
                        </p>
                        <div class="social-links">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                    <div class="quick-links">
                        <h3>Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">New</a></li>
                            <li><a href="#">Jersey Shop</a></li>
                            <li><a href="#">Club </a></li>
                            <li><a href="#">Nation</a></li>
                            <li><a href="#">Sales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-2 col-md-6 col-sm-6">
                    <div class="quick-links">
                        <h3>InFormation
                        </h3>
                        <ul>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Customer Says</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Shipping Info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                    <div class="quick-links">
                        <h3>Download App
                        </h3>
                        <a href="#"><img src="images/gog-down.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="copy-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <h2>COPYRIGHT 2023 .PREMIUM SOCCER OFFICIAL ALL RIGHT RESERVED.
                    </h2>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="row foot-imgs">
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop1.png" /></a>
                        </div>
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop2.png" /></a>
                        </div>
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop3.webp" /></a>
                        </div>
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop4.png" /></a>
                        </div>
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop5.png" /></a>
                        </div>
                        <div class="col-4 col-lg-2 col-sm-6">
                            <a href="#"><img src="images/cop6.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="js/selectCountry.js"></script>
<script type="text/javascript">
    $('.shop-kids-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    // custom size js start *****************************************************************************
    var counters = {
        small: 0,
        medium: 0,
        large: 0,
        xlarge: 0,
        xxlarge: 0
    };
    function updateCounter(size) {
        const counterElement = document.querySelectorAll(`.${size}-counter`);
        counterElement.forEach(ele => {
            ele.textContent = counters[size];
        })

        // Check if the counter is greater than 0, and if so, show the tab
        const tab = document.getElementById(`${size}-tab`);
        // const tab_pane = document.getElementById(`pills-${size}`);

        if (counters[size] > 0) {
            tab.style.display = 'block';
            tab.classList.add("active");
            // tab_pane.style.display = 'flex';
        } else {
            tab.style.display = 'none';
            // tab_pane.style.display = 'none';
        }
    }
    function incrementCounter(size) {
        counters[size]++;
        updateCounter(size);

        const container = document.getElementById(`cloned-elements-container-${size}`);

        // Create a new div to hold the content
        const newDiv = document.createElement('div');
        newDiv.id = 'size_qty_field';

        newDiv.innerHTML = `
        <form action="">    
            <button onclick="deleteField(event)" id="del-field" type="button">
                <i class="fas fa-trash-alt"></i>
            </button>
            <div class="mb-3">
                <input type="text" placeholder="US$3.50 Name">
                <input type="text" placeholder="US$3.50 Number">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Patch List</option>
                <option value="1"><img src="images/jer8.png" alt="">US$6.00 Inter Miami MLS
                    Away Badge & Apple TV(Pink) price</option>
                <option value="2"><img src="images/jer8.png" alt="">US$7.00 Inter Miami MLS
                    Away Badge & Apple TV(Pink) & XMANNA price</option>
                <option value="3"><img src="images/jer8.png" alt="">US$7.00 Inter Miami MLS
                    Away Badge & Apple TV(Pink) & Fracht Group(Pink) price</option>
            </select>
        </form>
    `;

        // Append the new div to the container
        container.appendChild(newDiv);

        // Store the cloned element for removal
        // clonedElements[size] = clone;
    }


    function decrementCounter(size) {
        if (counters[size] > 0) {
            counters[size]--;
            updateCounter(size);

            // Find the last cloned element in the container and remove it
            const container = document.getElementById(`cloned-elements-container-${size}`);
            const clonedElementsInContainer = container.querySelectorAll('#size_qty_field');
            if (clonedElementsInContainer.length > 0) {
                const lastClonedElement = clonedElementsInContainer[clonedElementsInContainer.length - 1];
                container.removeChild(lastClonedElement);
            }
        }
    }
    function deleteField(event) {
        const container = event.target.parentNode;
        const containerParent = container.parentNode;
        const parentContainer = containerParent.parentNode;
        const tab_pane = parentContainer.parentNode;
        const tab_pane_parent = tab_pane.parentNode;
        const size = tab_pane_parent.getAttribute('data_size');
        tab_pane.removeChild(parentContainer);
        const counterElement = document.querySelectorAll(`.${size}-counter`);
        counters[size]--;
        counterElement.forEach(ele => {
            ele.textContent = counters[size];
        })
    }

    // custom size js end *****************************************************************************
    $('.cart-detail-img-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });


</script>
<!-- Navbar js start -->
<script>
    // club drop down start 
    const Club_nav = document.getElementById('Club-nav');
    const club_dropdown = document.getElementById('club-dropdown');
    Club_nav.addEventListener('mouseenter', function () {
        club_dropdown.classList.remove('hidden');
        nation_dropdown.classList.add('hidden');
    });
    club_dropdown.addEventListener('mouseleave', function () {
        club_dropdown.classList.add('hidden');
    });
    // club drop down end 
    // nation drop down start 
    const nation_nav = document.getElementById('nation-nav');
    const nation_dropdown = document.getElementById('nation-dropdown');
    nation_nav.addEventListener('mouseenter', function () {
        nation_dropdown.classList.remove('hidden');
        club_dropdown.classList.add('hidden');
    });
    nation_dropdown.addEventListener('mouseleave', function () {
        nation_dropdown.classList.add('hidden');
    });
    // nation drop down end

    // // jersey dropdown start
    // const jersey_nav = document.getElementById('Jersey-Shop');
    // const jersey_dropdown = document.getElementById('nation-dropdown');
    // nation_nav.addEventListener('mouseenter', function () {
    //     nation_dropdown.classList.remove('hidden');
    //     club_dropdown.classList.add('hidden');
    // });
    // nation_dropdown.addEventListener('mouseleave', function () {
    //     nation_dropdown.classList.add('hidden');
    // });
    // // jersey dropdown start
    const dropdown = document.querySelector('.dropdown');

    dropdown.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default click behavior
        dropdown.classList.add('show'); // Show the dropdown
    });
    dropdown.addEventListener('mouseenter', function () {
        club_dropdown.classList.add('hidden');
    });
    dropdown.addEventListener('mouseenter', function () {
        club_dropdown.classList.add('hidden');
    });
</script>
<!-- Navbar js start -->
</body>

</html>