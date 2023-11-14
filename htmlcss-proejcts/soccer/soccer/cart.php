<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


    <section class="cart-table">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PRODUCT</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">QUANTITY</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="cancel"><i class="fa-regular fa-xmark"></i></button>
                            <img src="images/jer3.png" />
                            <a href="#">Bayern Munich Training Kit (Jacket+Pants) 2023/24</a>
                        </td>
                        <td>
                            <h3><span>$55.99</span> $50.99
                            </h3>
                        </td>
                        <td>
                            <ul class="quant">
                                <li><button>-</button></li>
                                <li>0</li>
                                <li><button>+</button></li>
                            </ul>
                        </td>
                        <td>
                            <h3>$203.96
                            </h3>
                        </td>
                </tbody>
            </table>
            <section class="coupen-btns">
                <form>
                    <div>
                        <input placeholder="Coupen Code" type="number" />
                        <button class="theme-btn2">apply coupen</button>
                    </div>
                    <button class="theme-btn2">update cart</button>
                </form>
            </section>
        </div>
    </section>
    <!-- cart totals start -->
    <section class="cart-totals">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <div class="cart-total-sec">
                        <h3>cart totals</h3>
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="cart-titles">
                                    <h4>Subtotal</h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <p>$203.96
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="cart-titles">
                                    <h4>Shipping
                                    </h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5>
                                    Free Shipping</h5>
                                <p>Shipping To <span>Sindh.</span>
                                </p>
                                <button  id="toggleButton" class="change-add">CALCULATE SHIPPING</button>
                                <div class="cal-shipping hidden" id="elementToToggle" >
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="mb-3">
                                                    <select id="country" class="form-select">
                                                        <option>select country</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <select id="state" class="form-select">
                                                <option>_</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control mb-3" id="first-name"
                                                        aria-describedby="emailHelp" placeholder="city">
                                                    <input type="text" class="form-control" id="first-name"
                                                        aria-describedby="emailHelp" placeholder="postcode/ZIP">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="cart-titles">
                                    <h4>total</h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h2>$203.96</h2>
                            </div>
                        </div>
                        <div class="check-out">
                            <a href="checkout.php" class="theme-btn">proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart totals end -->
    <script>
        const toggleButton = document.getElementById('toggleButton');
        const elementToToggle = document.getElementById('elementToToggle');

        toggleButton.addEventListener('click', () => {
            if (elementToToggle.classList.contains('hidden')) {
                elementToToggle.classList.remove('hidden');
            } else {
                elementToToggle.classList.add('hidden');
            }
        });
    </script>

<?php
include 'includes/footer.php';
$page = 'home';
?>