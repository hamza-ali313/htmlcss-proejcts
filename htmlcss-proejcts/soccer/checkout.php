<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


    <!-- billing details sec start -->
    <section class="checkout-forms">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="billing-details">
                        <h2>
                            BILLING DETAILS
                        </h2>
                        <form>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">First name *
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Last name *
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Company name (optional)
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country / Region *
                                        </label>
                                        <select id="country" class="form-select">
                                            <option>select country</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <select id="state" class="form-select">
                                    <option>_</option>
                                </select>
                            </div> -->
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Street address *
                                        </label>
                                        <input type="text" class="form-control mb-3" id="first-name"
                                            aria-describedby="emailHelp" placeholder="house number and street name">
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp"
                                            placeholder="apartment, suit, unit, etc. (optional)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Postcode / ZIP *
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Town / City *
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Phone *
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Email address *
                                        </label>
                                        <input type="text" class="form-control" id="first-name"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="ship-diff">
                                <h2>
                                    SHIP TO A DIFFERENT ADDRESS?
                                </h2>
                                <form action="">
                                    <input type="checkbox" id="toggleCheckbox">
                                </form>
                            </div>
                            <div id="billing-address" class="">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="first-name" class="form-label">First name *
                                            </label>
                                            <input type="text" class="form-control" id="first-name"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Last name *
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="first-name" class="form-label">Company name (optional)
                                            </label>
                                            <input type="text" class="form-control" id="first-name"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country / Region *
                                            </label>
                                            <select id="country" class="form-select">
                                                <option>select country</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <select id="state" class="form-select">
                                        <option>_</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="first-name" class="form-label">Street address *
                                            </label>
                                            <input type="text" class="form-control mb-3" id="first-name"
                                                aria-describedby="emailHelp" placeholder="house number and street name">
                                            <input type="text" class="form-control" id="first-name"
                                                aria-describedby="emailHelp"
                                                placeholder="apartment, suit, unit, etc. (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="first-name" class="form-label">Postcode / ZIP *
                                            </label>
                                            <input type="text" class="form-control" id="first-name"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="first-name" class="form-label">Town / City *
                                            </label>
                                            <input type="text" class="form-control" id="first-name"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Order notes (optional)
                                        </label>
                                        <textarea name="" class="form-control"
                                            placeholder="Notes about your order, e.g. special notes for delivery." id=""
                                            cols="10" rows="7"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="your-order">
                        <h2>YOUR ORDER</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col" class="text-end">SUBTOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="uni">
                                        <p class="text-start">Bayern Munich Training Kit (Jacket+Pants) 2023/24 × 4</p>
                                    </th>
                                    <td>
                                        <p>$203.96
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h4>Subtotal</h4>
                                    </th>
                                    <td>
                                        <p>$203.96</p>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h4>Shipping</h4>
                                    </th>
                                    <td>
                                        <p>Enter Your Address To View Shipping Options.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h4>Total</h4>
                                    </th>
                                    <td>
                                        <h3>$203.96</h3>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12">
                                <div class="pay-info">
                                    <P>
                                        <i class="fas fa-info"></i>
                                        SORRY, IT SEEMS THAT THERE ARE NO AVAILABLE PAYMENT METHODS. PLEASE CONTACT US
                                        IF YOU REQUIRE ASSISTANCE OR WISH TO MAKE ALTERNATE ARRANGEMENTS.
                                    </P>
                                    <p class="pt-5">Your personal data will be used to process your order, support your
                                        experience
                                        throughout this website, and for other purposes described in our privacy policy.

                                        PLACE ORDER</p>
                                    <a href="#" class="theme-btn2">place order</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- billing details sec end  */ -->
    <section class="soccer-official">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-sm-6 col-md-6">
                    <h2>PREMIUM SOCCER OFFICiaL</h2>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="text-center">
                                <i class="far fa-shield-check"></i>
                                <h3>100% SECURE
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="text-center">
                                <i class="fab fa-dropbox"></i>
                                <h3>DROPSHIPPING
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="text-center">
                                <i class="fas fa-plane"></i>
                                <h3>FAST SHIPPING
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="text-center">
                                <i class="fal fa-chart-line-down"></i>
                                <h3>WHOLESALE PRICE
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const toggleCheckbox = document.getElementById('toggleCheckbox');
        const address = document.getElementById('billing-address');

        toggleCheckbox.addEventListener('change', () => {
            if (toggleCheckbox.checked) {
                address.classList.remove('hidden');
            } else {
                address.classList.add('hidden');
            }
        });

    </script>

<?php
include 'includes/footer.php';
$page = 'home';
?>