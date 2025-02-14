<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="/template/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/template/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/template/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/template/css/flaticon.css">
    <link rel="stylesheet" href="/template/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/template/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/template/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/template/css/style.css">
</head>

<body>
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="/template/img//logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="catalog">products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart">shopping cart</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="user/login">
                                        login

                                    </a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="blog">blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href="cart.html">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                        <?php if(!User::checkAuth()):?>
                            <a href="user/login"><i class="fa fa-lock" style="font-size: 17px"></i></a>
                        <?php else:?>
                            <a href="user/logout" ><i class="fa fa-unlock" style="font-size: 17px"></i></a>
                        <?php endif;?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->

