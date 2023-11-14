<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<!-- xero contact us form start -->
<section class='xero-contact'>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="schedule-consultation">
                    <div class="text-center pb-4">
                        <h1>Let's Get Started
                        </h1>
                        <p>
                            Join thousands of businesses who already trust us to handle their bookkeeping. Contact us
                            directly or fill out our online form below and one of our Certified BooXkeeping Officers
                            will be
                            in touch within 24 business hours.
                        </p>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">last Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="last Name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="email">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">phone number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">company</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="company">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">industry</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Type of Business">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">What service are you interested in? </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Please Select</option>
                                        <option value="1">Bookkeeping services</option>
                                        <option value="2">Bookkeeping For Franchises</option>
                                        <option value="3">White Label Bookkeeping</option>
                                        <option value="3">QuickBooks Solutions</option>
                                        <option value="3">Xero Solutions</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="theme-btn">
                            submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- xero contact us form end -->


<?php
include 'includes/footer.php';
$page = 'home';
?>