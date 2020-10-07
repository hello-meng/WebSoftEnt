<?php
    $companyName1 = "Soft Enterprises";
    $phoneNo = "087-568-5005";
    $faxNo = "02-021-2965";
    $emailContact = "SoftEnt.Service@hotmail.com";
    $AddressTh = "681/8 ชั้นที่ จี ห้องเลขที่ จี5 ถนนหลวงแพ่ง แขวงทับยาว เขตลาดกระบัง กรุงเทพฯ 10520";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content=<?= $companyName1 ?> />
    <meta name="keywords" content="Software, Develop, hardware" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?> - <?= $companyName1 ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/gif" href="<?= base_url('img/Logo_SoftEnterprises.gif'); ?>">
    <!-- <link rel="shortcut icon" type="image/png" href="<?= base_url('img/Logo_Icon_SoftEnt.ico'); ?>"> -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css"> -->

    <link rel="stylesheet" href="<?= site_url('') ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url('') ?>/css/style.css" type="text/css">

    <!-- Day-->    
    <link rel="stylesheet" href="<?= site_url('') ?>/css/main-table.css" type="text/css">
    <!-- <link rel="stylesheet" href="<?= site_url('') ?>/css/util.css" type="text/css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= site_url('') ?>/vendor/perfect-scrollbar/perfect-scrollbar.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= site_url('') ?>/vendor/select2/select2.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= site_url('') ?>/vendor/animate/animate.css"> -->

</head>
<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="header__top__left">
                        <li><span class="icon_mobile"></span>Phone no: <?= $phoneNo ?></li>
                        <li><span class="icon_mail_alt"></span>email us: <a href="#"><span> <?= $emailContact ?></span></a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="header__top__right">
                        <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
                        <div class="header__right__social">
                            <a href="#"><span class="social_facebook"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light sticky-top header__menu__nv">
        <div class="container">
            <a class="navbar-brand header__logo__brand" href="<?= site_url('home') ?>"><?= $companyName1 ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('home') ?>"><span class="head__fn">Home</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('home/about') ?>"><span class="head__fn">About</span></a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="head__fn">Software</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?= site_url('software/buffet') ?>"><span class="head__fn__item">โปรแกรม Buffet & A la carte</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/restaurant') ?>"><span class="head__fn__item">โปรแกรม Restaurant Bistro ,Coffee Shop</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/qsr') ?>"><span class="head__fn__item">โปรแกรม Quick Service Restaurant (QSR)</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/foodzone') ?>"><span class="head__fn__item">โปรแกรม Shop Zone ,Food Zone</span></a>                            
                            <a class="dropdown-item" href="<?= site_url('software/onepos') ?>"><span class="head__fn__item">โปรแกรม 1 Pos</span></a>
                            <!-- <a class="dropdown-item" href="<?= site_url('software/jewelry') ?>"><span class="head__fn__item">โปรแกรมร้าน Jewelry</span></a> -->
                            <a class="dropdown-item" href="<?= site_url('software/mediumshop') ?>"><span class="head__fn__item">โปรแกรม Small shop, Minimart</span></a>                            
                            <a class="dropdown-item" href="<?= site_url('software/departmentstore') ?>"><span class="head__fn__item">โปรแกรม Department Store</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/jewelry') ?>"><span class="head__fn__item">โปรแกรม Jewelry / Tour shop</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/rent') ?>"><span class="head__fn__item">โปรแกรมระบบเช่า</span></a>
                            <a class="dropdown-item" href="<?= site_url('software/carservices') ?>"><span class="head__fn__item">โปรแกรมอู่ซ่อมรถ</span></a>
                            <!-- <a class="dropdown-item" href="<?= site_url('software/booking') ?>"><span class="head__fn__item">โปรแกรมจัดการจองจัดยานพาหนะ</span></a> -->
                            <a class="dropdown-item" href="<?= site_url('software/sop') ?>"><span class="head__fn__item">S&OP และ S&OP Commission</span></a>
                            <!-- <a class="dropdown-item" href="<?= site_url('software/consultation') ?>"><span class="head__fn__item">รับปรึกษาและพัฒนาโปรแกรมตามความต้องการ</span></a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="head__fn">Feature/Price</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?= site_url('feature/featurepos') ?>"><span class="head__fn__item">ตารางเปรียบเทียบ Point of sale (POS)</span></a>
                            <a class="dropdown-item" href="<?= site_url('feature/featurerest') ?>"><span class="head__fn__item">ตารางเปรียบเทียบร้านอาหาร</span></a>
                            <a class="dropdown-item" href="<?= site_url('feature/price') ?>"><span class="head__fn__item">Price/Promotion</span></a>
                        </div>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('feature') ?>"><span class="head__fn">Feature</span></a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('pricing/price') ?>"><span class="head__fn">Price/Promotion</span></a></li> -->
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('network') ?>"><span class="head__fn">Network</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('hardware') ?>"><span class="head__fn">Hardware</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('contact') ?>"><span class="head__fn">Contact</span></a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="head__fn">Pages</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?= site_url('home/about') ?>"><span class="head__fn__item">About us</span></a>
                            <a class="dropdown-item" href="<?= site_url('contact') ?>"><span class="head__fn__item">Contact us</span></a>
                        </div>
                    </li>                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header Section End -->    

    <!-- RenderBody() -->
    <?= $this->renderSection('content') ?>

    <!-- Footer Section Begin -->
    <footer class="ftco__footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__top__item">
                            <div class="footer__top__item__text">
                                <img src="<?= base_url('img/icon/ft-2.png'); ?>" alt="">
                                <p>ติดต่อเรา</p>
                                <h3><?= $phoneNo ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__top__item last__item">
                            <div class="footer__top__item__text">
                                <img src="<?= base_url('img/icon/ft-3.png'); ?>" alt="">
                                <p>แผนที่</p>
                                <h3>Find us on map</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__text">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a class="footer__logo__brand" href="<?= site_url('home') ?>"><?= $companyName1 ?></a>
                            </div>
                            <a href="#" class="primary-btn"><span class="icon_phone"></span> ติดต่อเรา</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__address">
                            <h5>My Office</h5>
                            <p>Address: <?= $AddressTh ?></p>
                            <ul>
                                <li>Fax: <?= $faxNo ?></li>
                                <li>Mobile: <?= $phoneNo ?></li>
                                <li>Email: <?= $emailContact ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved
                        </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-md-4">
                    <div class="footer__copyright__social">
                        <a href="#"><span class="social_facebook"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->
    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
    <!-- Js Plugins -->
    <script src="<?= site_url('') ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= site_url('') ?>/js/bootstrap.min.js"></script>
    <script src="<?= site_url('') ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= site_url('') ?>/js/jquery-ui.min.js"></script>
    <script src="<?= site_url('') ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?= site_url('') ?>/js/jquery.slicknav.js"></script>
    <script src="<?= site_url('') ?>/js/owl.carousel.min.js"></script>
    <script src="<?= site_url('') ?>/js/main.js"></script>
</body>
</html>
