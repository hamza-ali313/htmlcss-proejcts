<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>

    <!-- Include your CSS here -->
    <style>
        /* Your CSS rules go here */
        footer {
            display: none;
        }

        header {
            display: none;
        }
    </style>
</head>

<body>
    <section class="baba-cat-sec">
        <img src="./images/hid1.png" class="hid1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="main-img">
                        <img src="./images/Logo - Boba Cats Cafe - D-09 1.png" alt="">
                    </div>
                    <div class="cat-links-sec">
                        <div class="row align-items-baseline">
                            <div class="col-12 col-xl-4 col-lg-12 col-md-12">
                                <a href="bobacafe.php" class="cat-link boba">
                                    <h2>baba <br><span>cafe</span></h2>
                                    <img src="./images/link1.png">
                                </a>
                            </div>
                            <div class="col-12 col-xl-4 col-lg-12 col-md-12">
                                <a href="./cat-experience.php" class="cat-link cat">
                                    <h2>cat <br><span>experience</span></h2>
                                    <img src="./images/link2.png">
                                </a>
                            </div>
                            <div class="col-12 col-xl-4 col-lg-12 col-md-12">
                                <a href="./boba-cat-shop.php" class="cat-link shop">
                                    <h2 class="pb-5"><span>more</span><br>shop</h2>
                                    <img src="./images/link3.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="./images/hid2.png" class="hid2">
    </section>
</body>

</html>
<?php
include 'includes/footer.php';
$page = 'home';
?>