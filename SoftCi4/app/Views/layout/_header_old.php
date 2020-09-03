<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content=@companyName1 />
    <meta name="keywords" content="Software, Develop, hardware" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?> - Soft Enterprises Co.,Ltd.</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">



</head>
<body>

    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="header__top__left">
                        <li><span class="icon_mobile"></span>Phone no: @phoneNo</li>
                        <li><span class="icon_mail_alt"></span>email us: <a href="#"><span> @emailContact</span></a></li>
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
            <a class="navbar-brand header__logo__brand" asp-area="" asp-controller="Home" asp-action="Index">@companyName1</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" asp-area="" asp-controller="Home" asp-action="Index"><span class="head__fn">Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" asp-area="" asp-controller="Home" asp-action="About"><span class="head__fn">About</span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="head__fn">Software</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Buffet"><span class="head__fn">โปรแกรม Restaurant Buffet & A la carte</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Restaurant"><span class="head__fn">โปรแกรม Restaurant Bistro ,Coffee Shop</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="QSR"><span class="head__fn">โปรแกรม Quick Service Restaurant (QSR)</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="FoodZone"><span class="head__fn">โปรแกรม Shop Zone ,Food Zone</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Jewelry"><span class="head__fn">โปรแกรมร้าน Jewelry</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="MediumShop"><span class="head__fn">โปรแกรมร้าน Shop, Minimart</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="LargeShop"><span class="head__fn">โปรแกรม Department Store</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Rent"><span class="head__fn">โปรแกรมระบบเช่า</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="CarServices"><span class="head__fn">โปรแกรมอู่ซ่อมรถ</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Booking"><span class="head__fn">โปรแกรมจัดการจองจัดยานพาหนะ</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="SOP"><span class="head__fn">S&OP และ S&OP Commission</span></a>
                            <a class="dropdown-item" asp-area="" asp-controller="Software" asp-action="Consultation"><span class="head__fn">รับปรึกษาและพัฒนาโปรแกรมตามความต้องการ</span></a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" asp-area="" asp-controller="Network" asp-action="Index"><span class="head__fn">Network</span></a></li>
                    <li class="nav-item"><a class="nav-link" asp-area="" asp-controller="Harware" asp-action="Index"><span class="head__fn">Hardware</span></a></li>
                    <li class="nav-item"><a class="nav-link" asp-area="" asp-controller="Home" asp-action="Contact"><span class="head__fn">Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header Section End -->