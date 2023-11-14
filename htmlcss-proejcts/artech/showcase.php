<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<!-- inner banner sec start-->
<section class="inner-banner remodel">
    <img src="images/showcase-ban-bg.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="in-ban-txt">
                    <h1>ARTEC SHOWCASE</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- inner banner sec end-->
<!-- project showcase start -->
<section class="proj-showcase">
    <div class="container">
        <h1>Project Showcase</h1>
        <div class="row">
            <div class="col-12 col-lg-12">
                <ul class="proj-filters">
                    <li><a href="#">
                            By Location
                        </a></li>
                    <li><a href="#">
                            By Type
                        </a></li>
                    <li><a href="#">
                            By Date
                        </a></li>
                </ul>
                <div class="proj-tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-All-Projects-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-All-Projects" type="button" role="tab"
                                aria-controls="pills-All-Projects" aria-selected="true">All-Projects</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-San-Francisco-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-San-Francisco" type="button" role="tab"
                                aria-controls="pills-San-Francisco" aria-selected="false">San Francisco Bay Area</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Seattle-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Seattle" type="button" role="tab" aria-controls="pills-Seattle"
                                aria-selected="false">Seattle</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Angelos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Angelos" type="button" role="tab" aria-controls="pills-Angelos"
                                aria-selected="false">Los Angelos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Houston-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Houston" type="button" role="tab" aria-controls="pills-Houston"
                                aria-selected="false">Houston</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Hawaii-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Hawaii" type="button" role="tab" aria-controls="pills-Hawaii"
                                aria-selected="false">Hawaii</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-New-York-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-New-York" type="button" role="tab" aria-controls="pills-New-York"
                                aria-selected="false">New York Metro Area</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-All-Projects" role="tabpanel"
                            aria-labelledby="pills-All-Projects-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-San-Francisco" role="tabpanel"
                            aria-labelledby="pills-San-Francisco-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                     <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Seattle" role="tabpanel"
                            aria-labelledby="pills-Seattle-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Angelos" role="tabpanel"
                            aria-labelledby="pills-Angelos-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                   <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Houston" role="tabpanel"
                            aria-labelledby="pills-Houston-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Hawaii" role="tabpanel" aria-labelledby="pills-Hawaii-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="tab-pane fade" id="pills-New-York" role="tabpanel"
                            aria-labelledby="pills-New-York-tab">
                            <div class="proj-head">
                                <h2>
                                    All Projects
                                </h2>
                                <a href="#" class="theme-btn">see all</a>
                            </div>
                            <div class="all_proj_listing">
                                <div class="row mb-5">
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj1.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj2.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj3.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj7.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj8.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj9.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj4.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj5.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 col-lg-6 col-md-6 mb-5">
                                        <div class="proj-sec">
                                            <img src="images/proj6.png" alt="">
                                            <div class="proj-desc">
                                                <h3>San Francisco, CA</h3>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Scope of work:</td>
                                                            <td>Permit | Labour | Material</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Type:</td>
                                                            <td>Bathroom *2; Painting; Flooring</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Costs:</td>
                                                            <td>$ 140,000 - $ 158,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Compl Date:</td>
                                                            <td>09/01/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="theme-btn">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project showcase end -->

<!-- Browse Listing By Category start -->
<section class="browse-category-sec">
    <div class="container">
        <h2>Browse Listing By Category</h2>
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                <div class="listing-sec">
                    <img src="./images/list1.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Bathrooms</h3>
                            </li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                <div class="listing-sec">
                    <img src="./images/list2.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Kitchens</h3>
                            </li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                <div class="listing-sec">
                    <img src="./images/list3.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Painting</h3>
                            </li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                <div class="listing-sec">
                    <img src="./images/list4.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Flooring</h3>
                            </li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="listing-sec">
                    <img src="./images/list5.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Lorem Ipsum Simply Dummy</h3>
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="listing-sec">
                    <img src="./images/list6.png">
                    <div>
                        <ul>
                            <li>
                                <h3>Lorem Ipsum Simply Dummy</h3>
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Browse Listing By Category end -->

<!-- ready to start sec start -->
<section class="ready-to-start">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div>
                    <h2>Ready to Start a Renovation Project?</h2>
                    <h3>Get in touch! We're ready to assist you.</h3>
                    <a href="#" class="theme-btn">Get an Online Estimate?</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ready to start sec end -->

<?php
include 'includes/footer.php';
$page = 'home';
?>