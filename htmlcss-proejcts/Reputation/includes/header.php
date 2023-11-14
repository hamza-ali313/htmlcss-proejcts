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
    <header class="main-header">
        <div class="container-fluid p-lg-0">
            <div class="row justify-content-end">
                <div class="col-lg-11 col-xl-11">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="logo">
                                <img class="img-fluid" src="images/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 pe-0">
                            <div class="contact">
                                <a href="tel:1 (234) 567-7890" class="btn-num">
                                    <i class="fa-solid fa-phone fa-shake"></i>
                                    <span>Immediate Assistance</span>
                                    Call Now 1 (234) 567-7890
                                </a>
                                <a href="javascript:;" class="get-con">free consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>