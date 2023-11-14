<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Home | The Praetors';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
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
    <link rel="shortcut icon" href="images/favicon.svg" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- <script>
      (function(w,d,t,r,u)
      {
        var f,n,i;
        w[u]=w[u]||[],f=function()
        {
          var o={ti:"355018866", enableAutoSpaTracking: true}; 
          o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") 
        },
        n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
        {
          var s=this.readyState;
          s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
        },
        i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
      })
      (window,document,"script","//bat.bing.com/bat.js","uetq");
    </script> -->

</head>

<body>

    <section>
        <header>
            <nav class="navbar sl-navbar navbar-expand-lg">
                <div class="container container-navbar">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sl-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center gap-1 ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">3d design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">our project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">investor and finance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">sell or buy project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">valuation and quotion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>