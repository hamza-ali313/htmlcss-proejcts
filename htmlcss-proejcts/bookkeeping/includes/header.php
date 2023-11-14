<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar Start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="./index.php"><img src="images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item">
                                    <a class="" href="small-business-bookkeeping.php">Small Business Bookkeeping</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="franchise-bookkeeping-services.php">Bookkeeping For Franchises</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="white-label-bookkeeping.php">White Label Bookkeeping</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="quickbooks-solutions.php">QuickBooks Solutions</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="Xero-Accounting.php">Xero Accounting Software Solutions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">resources</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item">
                                    <a class="" href="blog.php">Blog</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="faq.php">FAQ</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="about.php">About Us</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="" href="careers.php">Careers</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Client Login</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Own A Franchise</a>
                        </li>
                    </ul>
                    <a href="hire.php" class="theme-btn">Hire Us Today</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->