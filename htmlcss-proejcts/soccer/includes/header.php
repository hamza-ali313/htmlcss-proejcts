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
        <div class="top-head">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-sm-12 col-md-4">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-12 col-md-4">
                        <h2>FREE SHIPPING THIS WEEK ORDER OVER – 75$</h2>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-12 col-md-4">
                        <ul class="top-right">
                            <li>
                                <a href="tel:(123) 456-789-0"><i class="fas fa-phone"></i>(123) 456-789-0
                                </a>
                                |
                                <a href="mailto:YOURMAIL@GMAIL.COM"><i
                                        class="fas fa-envelope"></i></i>YOURMAIL@GMAIL.COM
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container d-block">
                <div class="row">
                    <div class="col-12 col-lg-3 col-sm-12 col-md-12 nav-toggle">
                        <a class="navbar-brand" href="./home.php"><img src="images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="main-header">
                                <form action="">
                                    <input placeholder="search here" class="d-block" />
                                    <i class="far fa-search"></i>
                                </form>
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a class="nav-link " href="new.php">New</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " role="button" id="Jersey-Shop" href="#"
                                            data-bs-toggle="dropdown" aria-expanded="false">Jersey Shop <i
                                                class="fa-regular fa-chevron-down fa-xs"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="Jersey-Shop">
                                            <div class="row">
                                                <div class="col-lg col-sm-12 col-12">
                                                    <ul>
                                                        <li><a href="authentic-jerseys.php"><i
                                                                    class="fa-solid fa-futbol"></i>Authentic
                                                                Jerseys</a></li>
                                                        <li><a href="jacket.php"><i
                                                                    class="fa-solid fa-futbol"></i>Jacket &
                                                                Windbreaker
                                                            </a></li>
                                                        <li><a href="long-sleeve.php"><i
                                                                    class="fa-solid fa-futbol"></i>Long sleeve
                                                                Jerseys
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg col-sm-12 col-12">
                                                    <ul>
                                                        <li><a href="replica.php"><i
                                                                    class="fa-solid fa-futbol"></i>Replica
                                                                Jerseys
                                                            </a></li>
                                                        <li><a href="polo.php"><i class="fa-solid fa-futbol"></i>Polo
                                                            </a></li>
                                                        <li><a href="retro.php"><i class="fa-solid fa-futbol"></i>Retro
                                                                Jerseys
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg col-sm-12 col-12">
                                                    <ul>
                                                        <li><a href="soccer-kits.php"><i
                                                                    class="fa-solid fa-futbol"></i>Soccer Kits
                                                            </a></li>
                                                        <li><a href="soccer-socks.php"><i
                                                                    class="fa-solid fa-futbol"></i>Soccer Socks
                                                            </a></li>
                                                        <li><a href="soccer-cleats.php"><i
                                                                    class="fa-solid fa-futbol"></i>Soccer Cleats
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg col-sm-12 col-12">
                                                    <ul>
                                                        <li><a href="soccer-shorts.php"><i
                                                                    class="fa-solid fa-futbol"></i>Soccer Shorts
                                                            </a></li>
                                                        <li><a href="sweat-shirt.php"><i
                                                                    class="fa-solid fa-futbol"></i>Sweat Shirt
                                                                Kit
                                                            </a></li>
                                                        <li><a href="goalkeeper-gloves.php"><i
                                                                    class="fa-solid fa-futbol"></i>Goalkeeper
                                                                Gloves
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg col-sm-12 col-12">
                                                    <ul>
                                                        <li><a href="sweater.php"><i
                                                                    class="fa-solid fa-futbol"></i>Sweater Hoodie
                                                            </a></li>
                                                        <li><a href="training-kit.php"><i
                                                                    class="fa-solid fa-futbol"></i>Training Kit
                                                            </a></li>
                                                        <li><a href="training-pants.php"><i
                                                                    class="fa-solid fa-futbol"></i>Training Pants
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="Club-nav" href="club.php">Club<i
                                                class="fa-regular fa-chevron-down fa-xs"></i></a>
                                        <div class="hidden " id="club-dropdown" aria-labelledby="Club">
                                            <div class="d-flex align-items-start">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link " id="v-pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-home"
                                                        type="button" role="tab" aria-controls="v-pills-home"
                                                        aria-selected="true"><i class="fa-solid fa-futbol"></i>Most
                                                        Popular</button>
                                                    <button class="nav-link" id="v-pills-profile-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                                        type="button" role="tab" aria-controls="v-pills-profile"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>Premier
                                                        League</button>
                                                    <button class="nav-link" id="v-pills-messages-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                                        type="button" role="tab" aria-controls="v-pills-messages"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>La
                                                        Liga</button>
                                                    <button class="nav-link" id="v-pills-settings-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                                                        type="button" role="tab" aria-controls="v-pills-settings"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>Ligue
                                                        1</button>
                                                </div>
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">AC Milan</a></li>
                                                                    <li><a href="#">AS Roma
                                                                        </a></li>
                                                                    <li><a href="#">Borushia Dortmun
                                                                        </a></li>
                                                                    <li><a href="#">FC Porto
                                                                        </a></li>
                                                                    <li><a href="#">Manchester City
                                                                        </a></li>
                                                                    <li><a href="#">Real Madrid
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Ajax
                                                                        </a></li>
                                                                    <li><a href="#">Barcelona
                                                                        </a></li>
                                                                    <li><a href="#">Chalsea
                                                                        </a></li>
                                                                    <li><a href="#">Inter Milan
                                                                        </a></li>
                                                                    <li><a href="#">Manchester United
                                                                        </a></li>
                                                                    <li><a href="#">Tottenham Hotspur
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Al Nassr
                                                                        </a></li>
                                                                    <li><a href="#">Bayarn Munich
                                                                        </a></li>
                                                                    <li><a href="#">Chivas
                                                                        </a></li>
                                                                    <li><a href="#">Juventus
                                                                        </a></li>
                                                                    <li><a href="#">Napoli
                                                                        </a></li>
                                                                    <li><a href="#">Tigres UANL
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Arsenal
                                                                        </a></li>
                                                                    <li><a href="#">Sweat
                                                                            Shirt
                                                                            Kit
                                                                        </a></li>
                                                                    <li><a href="#">Benfica
                                                                        </a></li>
                                                                    <li><a href="#">Club America
                                                                        </a></li>
                                                                    <li><a href="#">Liverpool
                                                                        </a></li>
                                                                    <li><a href="#">PSG
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Arsenal</a></li>
                                                                    <li><a href="#">Chelsea
                                                                        </a></li>
                                                                    <li><a href="#">Liverpool
                                                                        </a></li>
                                                                    <li><a href="#">Tottenham Hotspur
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Aston Villa
                                                                        </a></li>
                                                                    <li><a href="#">Crystal Palace
                                                                        </a></li>
                                                                    <li><a href="#">Manchester City
                                                                        </a></li>
                                                                    <li><a href="#">West Ham United
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Brighton & Hove Albion
                                                                        </a></li>
                                                                    <li><a href="#">
                                                                            Everton
                                                                        </a></li>
                                                                    <li><a href="#">Manchester United
                                                                        </a></li>
                                                                    <li><a href="#">Wolverhampton Wanderers
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Cardiff City
                                                                        </a></li>
                                                                    <li><a href="#">
                                                                            Leicester City
                                                                        </a></li>
                                                                    <li><a href="#">Newcastle
                                                                        </a></li>
                                                                    <li><a href="#">View All
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                        aria-labelledby="v-pills-messages-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Atletico Madrid</a></li>
                                                                    <li><a href="#">Deportivo La Coruña
                                                                        </a></li>
                                                                    <li><a href="#">Real Madrid
                                                                        </a></li>
                                                                    <li><a href="#">Valencia
                                                                        </a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Barcelona
                                                                        </a></li>
                                                                    <li><a href="#">SD Eibar
                                                                        </a></li>
                                                                    <li><a href="#">Real Sociedad
                                                                        </a></li>
                                                                    <li><a href="#">Inter Milan
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Celta Vigo
                                                                        </a></li>
                                                                    <li><a href="#">Rayo Vallecano
                                                                        </a></li>
                                                                    <li><a href="#">Sevilla
                                                                        </a></li>
                                                                    <li><a href="#">RCD Espanyol
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Deportivo Alavés
                                                                        </a></li>
                                                                    <li><a href="#">Real Betis
                                                                        </a></li>
                                                                    <li><a href="#">Sporting Gijón
                                                                        </a></li>
                                                                    <li><a href="#">Real Valladolid
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                        aria-labelledby="v-pills-settings-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">AS Monaco FC</a></li>
                                                                    <li><a href="#">OGC Nice
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Bordeaux Girondins
                                                                        </a></li>
                                                                    <li><a href="#">Olympique Lyonnais
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Lille OSC
                                                                        </a></li>
                                                                    <li><a href="#">PSG
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Marseilles
                                                                        </a></li>
                                                                    <li><a href="#">Stade de Reims
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="nationalleague.php" id="nation-nav">Nation<i
                                                class="fa-regular fa-chevron-down fa-xs"></i></a>
                                        <div class="hidden " id="nation-dropdown" aria-labelledby="Club">
                                            <div class="d-flex align-items-start">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-nation1-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-nation1"
                                                        type="button" role="tab" aria-controls="v-pills-nation1"
                                                        aria-selected="true"><i class="fa-solid fa-futbol"></i>Most
                                                        Popular</button>
                                                    <button class="nav-link" id="v-pills-nation2-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-nation2"
                                                        type="button" role="tab" aria-controls="v-pills-nation2"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>Premier
                                                        League</button>
                                                    <button class="nav-link" id="v-pills-nation3-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-nation3"
                                                        type="button" role="tab" aria-controls="v-pills-nation3"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>La
                                                        Liga</button>
                                                    <button class="nav-link" id="v-pills-nation4-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-nation4"
                                                        type="button" role="tab" aria-controls="v-pills-nation4"
                                                        aria-selected="false"><i class="fa-solid fa-futbol"></i>Ligue
                                                        1</button>
                                                </div>
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active " id="v-pills-nation1"
                                                        role="tabpanel" aria-labelledby="v-pills-nation1-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Argentina</a></li>
                                                                    <li><a href="#">Colombia
                                                                        </a></li>
                                                                    <li><a href="#">Ireland
                                                                        </a></li>
                                                                    <li><a href="#">Morocco
                                                                        </a></li>
                                                                    <li><a href="#">South Korea
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Belgium
                                                                        </a></li>
                                                                    <li><a href="#">England
                                                                        </a></li>
                                                                    <li><a href="#">Italy
                                                                        </a></li>
                                                                    <li><a href="#">Nigeria
                                                                        </a></li>
                                                                    <li><a href="#">Spain
                                                                        </a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Brazil
                                                                        </a></li>
                                                                    <li><a href="#">France
                                                                        </a></li>
                                                                    <li><a href="#">Japan
                                                                        </a></li>
                                                                    <li><a href="#">Portugal
                                                                        </a></li>
                                                                    <li><a href="#">USA
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Canada
                                                                        </a></li>
                                                                    <li><a href="#">Germany
                                                                        </a></li>
                                                                    <li><a href="#">Mexico
                                                                        </a></li>
                                                                    <li><a href="#">Liverpool
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-nation2" role="tabpanel"
                                                        aria-labelledby="v-pills-nation2-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Belgium</a></li>
                                                                    <li><a href="#">England
                                                                        </a></li>
                                                                    <li><a href="#">Iceland
                                                                        </a></li>
                                                                    <li><a href="#">Poland
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Bulgaria
                                                                        </a></li>
                                                                    <li><a href="#">Finland
                                                                        </a></li>
                                                                    <li><a href="#">Italy
                                                                        </a></li>
                                                                    <li><a href="#">Portugal
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Croatia
                                                                        </a></li>
                                                                    <li><a href="#">
                                                                            France
                                                                        </a></li>
                                                                    <li><a href="#">Macedonia
                                                                        </a></li>
                                                                    <li><a href="#">Romania
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Denmark
                                                                        </a></li>
                                                                    <li><a href="#">
                                                                            Germany
                                                                        </a></li>
                                                                    <li><a href="#">Norway
                                                                        </a></li>
                                                                    <li><a href="#">Russia
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-nation3" role="tabpanel"
                                                        aria-labelledby="v-pills-nation3-tab">

                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Argentina</a></li>
                                                                    <li><a href="#">Ecuador
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Brazil
                                                                        </a></li>
                                                                    <li><a href="#">Peru
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Chile
                                                                        </a></li>
                                                                    <li><a href="#">Uruguay
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Colombia
                                                                        </a></li>
                                                                    <li><a href="#">Venezuela
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-nation4" role="tabpanel"
                                                        aria-labelledby="v-pills-nation4-tab">
                                                        <div class="row">
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Canada</a></li>
                                                                    <li><a href="#">Panama
                                                                        </a></li>
                                                                    <li><a href="#">Salvador
                                                                        </a></li>


                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="replica.php">Costa Rica
                                                                        </a></li>
                                                                    <li><a href="#">Paraguay
                                                                        </a></li>
                                                                    <li><a href="#">USA
                                                                        </a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Honduras
                                                                        </a></li>
                                                                    <li><a href="#">Jamaica
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg col-sm-12 col-12">
                                                                <ul>
                                                                    <li><a href="#">Mexico
                                                                        </a></li>
                                                                    <li><a href="#">Benfica
                                                                        </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="sales.php">Sales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="testimonial.php">Customer Says</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="head-cart">
                                <li class="nav-item">
                                    <a class="nav-link " href="favourite.php"><i class="fas fa-heart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="cart.php"><i class="fal fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

