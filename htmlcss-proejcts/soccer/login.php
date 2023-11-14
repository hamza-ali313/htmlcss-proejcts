<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<!-- inner banner start -->
<section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="inner-ban-txt text-center">
                    <h1>Login
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- inner banner end -->

<!-- login sec start -->
<section class="log-sign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6">
                <form action="">
                    <div class="mb-4    ">
                        <label for="exampleInputEmail1" class="form-label">user name</label>
                        <input type="email" placeholder="enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-4    ">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" placeholder="enter you password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="theme-btn2">login</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- login sec end -->
<?php
include 'includes/footer.php';
$page = 'home';
?>