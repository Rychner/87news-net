
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $article->name }} - 87News</title>
        <meta name="description" content="News5 a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
        <link rel="canonical" href="https://unistudio.co/html/News5">
        <meta name="theme-color" content="#2757fd">

        <!-- Open Graph Tags -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="News5">
        <meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta property="og:url" content="https://unistudio.co/html/news5/">
        <meta property="og:site_name" content="News5">
        <meta property="og:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">
        <meta property="og:image:width" content="1180">
        <meta property="og:image:height" content="600">
        <meta property="og:image:type" content="image/png">

        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="News5">
        <meta name="twitter:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta name="twitter:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">

        <link rel="canonical" href="https://unistudio.co/html/news5/">

        <!-- preload head styles -->
        <link rel="preload" href="https://html.themewant.com/news5/assets/css/unicons.min.css" as="style">
        <link rel="preload" href="https://html.themewant.com/news5/assets/css/swiper-bundle.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/libs/jquery.min.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/libs/scrollmagic.min.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/libs/swiper-bundle.min.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/libs/anime.min.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/helpers/data-attr-helper.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/helpers/swiper-helper.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/helpers/anime-helper.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/helpers/anime-helper-defined-timelines.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/uikit-components-bs.js" as="script">
        <link rel="preload" href="https://html.themewant.com/news5/assets/js/app.js" as="script">

        <!-- app head for bootstrap core -->
        <script src="https://html.themewant.com/news5/assets/js/app-head-bs.js"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="https://html.themewant.com/news5/assets/js/uni-core/css/uni-core.min.css">

        <!-- include styles -->
        <link rel="stylesheet" href="https://html.themewant.com/news5/assets/css/unicons.min.css">
        <link rel="stylesheet" href="https://html.themewant.com/news5/assets/css/prettify.min.css">
        <link rel="stylesheet" href="https://html.themewant.com/news5/assets/css/swiper-bundle.min.css">

        <!-- include main style -->
        <link rel="stylesheet" href="https://html.themewant.com/news5/assets/css/theme/demo-two.min.css">

        <!-- include scripts -->
        <script src="https://html.themewant.com/news5/assets/js/uni-core/js/uni-core-bundle.min.js"></script>

        <style>
            .dropdown{
                position: relative
            }

            .uc-navbar-nav>li:hover>a {
                color: #ffa914 !important;
            }

            /* submenu */
            .submenu{
                position: absolute;
                top: 100%;
                left: 0;
                background: white;
                min-width: 220px;
                list-style: none;
                padding: 10px 0;
                margin: 0;
                display: none;
                box-shadow: 0 5px 15px rgba(0,0,0,0.15);
                z-index: 9999;
            }

            /* item submenu */
            .submenu li a{
                display: block;
                padding: 10px 18px;
                color: #333;
                text-decoration: none;
            }

            .submenu li a:hover{
                background: #f5f5f5;
            }

            /* tampil saat hover */
            .dropdown:hover .submenu{
                display: block;
            }

            .submenu.open{
                display:block;
            }
        </style>
    </head>
    <body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-gray-200 overflow-x-hidden">

        <!--  Search modal -->
        <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel w-100 sm:w-500px px-2 py-10">
                    <h3 class="h1 text-center">Search</h3>
                    <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
                        <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                        <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
                    </form>
                </div>
            </div>
        </div>

        <!--  Menu panel -->
        <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                    <div class="uc-logo">
                        <a href="index.html" class="h5 text-none text-gray-900 dark:text-white">
                            <img class="w-32px" src="../assets/images/common/logo-icon.svg" alt="News5" data-uc-svg>
                        </a>
                    </div>
                    <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                    </button>
                </header>

                <div class="panel">
                    <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                        <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                        <span class="form-icon text-gray">
                            <i class="unicon-search icon-1"></i>
                        </span>
                    </form>
                    <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                        <li class="uc-parent">
                            <a href="#">Homepages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li><a href="../main/index.html">Main</a></li>
                                <li><a href="../demo-two/index.html">Classic News</a></li>
                                <li><a href="../demo-three/index.html">Tech</a></li>
                                <li><a href="../demo-four/index.html">Classic Blog</a></li>
                                <li><a href="../demo-five/index.html">Gaming</a></li>
                                <li><a href="../demo-six/index.html">Sports</a></li>
                                <li><a href="../demo-seven/index.html">Newspaper</a></li>
                                <li><a href="../demo-eight/index.html">Magazine</a></li>
                                <li><a href="../demo-nine/index.html">Travel</a></li>
                                <li><a href="../demo-ten/index.html">Food</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Trending</a></li>
                        <li class="uc-parent">
                            <a href="#">Inner Pages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href="blog.html">Blog</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="blog.html">Full Width</a></li>
                                        <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                        <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                        <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="blog-details.html">Blog - detail</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="blog-details.html">Blog detail</a></li>
                                        <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="#">Useful pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="sign-up.html">Sign up</a></li>
                                        <li><a href="sign-in.html">Sign in</a></li>
                                        <li><a href="reset-password.html">Reset password</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="#">Other pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="page-faq.html">FAQ</a></li>
                                        <li><a href="page-terms.html">Terms of use</a></li>
                                        <li><a href="page-privacy.html">Privacy policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="shop.html">Shop</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href="shop.html">Shop layouts</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="shop.html">Shop 4 cols</a></li>
                                        <li><a href="shop-3.html">Shop 3 cols</a></li>
                                        <li><a href="shop-2.html">Shop 2 cols</a></li>
                                        <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-category.html">Archive category</a></li>
                                <li><a href="shop-product-detail.html">Product detail</a></li>
                                <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-cart-2.html">Cart - v2</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                                <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                                <li><a href="shop-order.html">Order confirmation</a></li>
                            </ul>
                        </li>
                        <li class="hr opacity-10 my-1"></li>
                        <li><a href="sign-in.html">Sign in</a></li>
                        <li><a href="sign-up.html">Create an account</a></li>
                    </ul>
                    <ul class="social-icons nav-x mt-4">
                        <li>
                            <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                        </li>
                    </ul>
                    <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                        <div class="vstack gap-1">
                            <span class="fs-7 opacity-60">Select theme:</span>
                            <div class="darkmode-trigger" data-darkmode-switch="">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider fs-5"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Cart panel -->
        <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <button class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="mini-cart-content vstack justify-between panel h-100">
                    <div class="mini-cart-header">
                        <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
                    </div>
                    <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                        <p class="alert alert-warning" hidden>Your cart empty!</p>
                        <div class="panel vstack gap-3">
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-07.jpg" alt="Laptop Cover" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Laptop Cover"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Laptop Cover</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$24.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-08.jpg" alt="Disney Toys" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Disney Toys"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Disney Toys</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$5.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-09.jpg" alt="Screen Axe" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Screen Axe"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Screen Axe</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$19.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-10.jpg" alt="Airpods Pro" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Airpods Pro"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Airpods Pro</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$49.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="mini-cart-footer panel pt-3 border-top">
                        <div class="panel vstack gap-3 justify-between">
                            <div class="mini-cart-total hstack justify-between">
                                <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                                <b class="fs-5">$97.00</b>
                            </div>
                            <div class="mini-cart-actions vstack gap-1">
                                <a href="shop-cart.html" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View cart</a>
                                <a href="shop-checkout.html" class="btn btn-md btn-primary text-white">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Favorites modal -->
        <div id="uc-favorites-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
                    <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                    <h2 class="h4 md:h3 m-0">Saved articles</h2>
                    <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
                    <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
                </div>
            </div>
        </div>

        <!--  Newsletter modal -->
        <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="row md:child-cols-6 col-match g-0">
                    <div class="d-none md:d-flex">
                        <div class="position-relative w-100 ratio-1x1">
                            <img class="media-cover" src="../assets/images/demo-two/common/newsletter.jpg" alt="Newsletter image">
                        </div>
                    </div>
                    <div>
                        <div class="panel vstack self-center p-4 md:py-8 text-center">
                            <h3 class="h3 md:h2">Subscribe to the Newsletter</h3>
                            <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and tips.</p>
                            <div class="panel mt-2 lg:mt-4">
                                <form class="vstack gap-1">
                                    <input type="email" class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark" placeholder="Your email address..">
                                    <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                                </form>
                                <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Account modal -->
        <div id="uc-account-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel vstack gap-2 md:gap-4 text-center">
                    <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none" data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Reset password</a></li>
                        <li><a href="#">Terms of use</a></li>
                    </ul>
                    <div class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Log in</h4>
                                <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                        <div class="hstack justify-between items-start text-start">
                                            <div class="form-check text-start">
                                                <input class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="checkbox" id="inputCheckRemember">
                                                <label class="hstack justify-between form-check-label fs-7 sm:fs-6" for="inputCheckRemember">Remember me?</label>
                                            </div>
                                            <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot password</a>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                                    </form>
                                    <div class="panel h-24px">
                                        <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                        <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Create an account</h4>
                                <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="text" placeholder="Full name" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Re-enter Password" autocomplete="new-password" required>
                                        <div class="hstack text-start">
                                            <div class="form-check text-start">
                                                <input id="input_checkbox_accept_terms" class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" required>
                                                <label for="input_checkbox_accept_terms" class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and accept the <a href="#" class="uc-link ms-narrow" data-uc-switcher-item="3">terms of use</a>. </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                                    </form>
                                    <div class="panel h-24px">
                                        <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                        <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Reset password</h4>
                                <div class="panel w-100 sm:w-350px">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <div class="form-check text-start">
                                            <input class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" id="inputCheckVerify" required>
                                            <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm not a robot</span>. </label>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a password</button>
                                    </form>
                                </div>
                                <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                                <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                                <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                                    <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci, ducimus ea modi odio assumenda.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                                    <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                                    <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                                    <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                </div>
                                <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  GDPR modal -->
        <div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
            <div class="uc-notification-message">
                <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
                <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
                <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By continuing to use our site, you accept our use of cookies, <a href="page-privacy.html" class="uc-link text-underline">Privacy Policy</a>, and <a href="page-terms.html" class="uc-link text-underline">Terms of Service</a>.</p>
                <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
            </div>
        </div>

        <!--  Bottom Actions Sticky -->
        <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
            <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
                <label class="switch">
                    <span class="sr-only">Dark mode toggle</span>
                    <input type="checkbox">
                    <span class="slider fs-5"></span>
                </label>
            </div>
            <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
                <i class="icon-2 unicon-chevron-up"></i>
            </a>
        </div>

        <!-- Header start -->
        <header class="uc-header header-two uc-navbar-sticky-wrap z-999" >
            <nav class="uc-navbar-container shadow-xs bg-white dark:bg-gray-900 fs-6 z-1">
                <div class="uc-center-navbar panel z-2">
                    <div class="container max-w-xl">
                        <div class="uc-navbar min-h-72px lg:min-h-100px text-gray-900 dark:text-white" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                             
                        </div>
                    </div>
                </div>
                <div class="uc-bottom-navbar panel hstack z-1 min-h-48px lg:min-h-56px bg-gray-800 border-top border-bottom" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="container max-w-xl">
                        <div class="hstack">
                            <div class="uc-navbar-left gap-2 lg:gap-3 d-none lg:d-flex">                            
                                <div class="uc-logo text-black dark:text-white">
                                    <a href="index.html">
                                        <img class="text-dark dark:text-white" src="../img/logo.png" alt="87News" data-uc-svg width="130px" style="padding-top:15px; padding-bottom:15px;">
                                    </a>
                                </div>                                
                            </div>
                            <div class="uc-navbar-center gap-2 lg:gap-3">
                                <div class="uc-navbar-item" style="--uc-nav-height: 48px">
                                    <ul class="nav-x gap-3 fs-5 fw-bold ms-2 d-none lg:d-flex fw-semibold flex-nowrap overflow-x-auto hide-scrollbar uc-horizontal-scroll w-screen md:w-auto md:mask-end-0 mx-n2 px-2 text-white">
                                        <li class="uc-active"><a href="#">Home</a></li>
                                        <li><a href="#">Pendidikan</a></li>
                                        <li><a href="#">Kesehatan</a></li>
                                        <li><a href="#">Olahraga</a></li>
                                        <li><a href="#">Politik</a></li>
                                        <li><a href="#">Hukum</a></li>
                                        <li><a href="#">Nasional</a></li>
                                        <li><a href="#">Opini</a></li>
                                    </ul>
                                    <ul class="uc-navbar-nav fs-5 fw-bold ms-2 d-none lg:d-flex text-white" style="--uc-nav-height: 72px">
                                        <li class="dropdown">
                                            <a href="#">
                                                <span>Daerah</span>
                                            </a>
                                            <ul class="submenu fs-6">
                                                <li><a href="#">Ambon</a></li>
                                                <li><a href="#">Maluku Tengah</a></li>
                                                <li><a href="#">Seram Bagian Barat</a></li>
                                                <li><a href="#">Seram Bagian Timur</a></li>
                                                <li><a href="#">Tual</a></li>
                                                <li><a href="#">Maluku Tenggara</a></li>
                                                <li><a href="#">Buru</a></li>
                                                <li><a href="#">Buru Selatan</a></li>
                                                <li><a href="#">Aru</a></li>
                                                <li><a href="#">Kepulauan Tanimbar</a></li>
                                                <li><a href="#">Maluku Barat Daya</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-navbar-right gap-2 lg:gap-3 d-none lg:d-flex">
                                <div class="uc-navbar-item">
                                    <a class="uc-search-trigger mb-narrow" href="#uc-search-modal" data-uc-toggle>
                                        <img class="text-white" src="https://html.themewant.com/news5/assets/images/common/icons/search.svg" alt="Search" data-uc-svg style="width: 20px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Header end -->

        <!-- Wrapper start -->       
        <div id="wrapper" class="wrap overflow-hidden-x">
            <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
                <div class="container max-w-xl">
                    <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="unicon-chevron-right opacity-50"></i></li>
                        <li><a href="blog.html">{{ $article->category->name }}</a></li>
                        <li><i class="unicon-chevron-right opacity-50"></i></li>
                        <li><span class="opacity-50">{{ $article->name }}</span></li>
                    </ul>
                </div>
            </div>

            <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
                <div class="container max-w-xl">
                    <div class="post-header">
                        <div class="panel vstack md:gap-6">
                            <div class="panel vstack max-w-100 sm:max-w-100 xl:max-w-100 gap-2 md:gap-3">
                                <h1 class="h4 sm:h2 lg:h1 xl:display-6">{{ $article->name }}</h1>                                
                            </div>
                            <div class="post-category hstack gap-narrow fw-semibold">
                                <a class="h2 text-gray text-none dark:text-primary duration-150" href="#">{{ $article->subjudul }}</a>
                            </div>
                            <div class="post-media panel uc-transition-toggle overflow-hidden h-100">
                                <div class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ Storage::url($article->thumbnail) }}" data-src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->name }}" data-uc-img="loading: lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel mt-4 lg:mt-6 xl:mt-9">
                    <div class="container max-w-lg">
                        <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                            <p>{!! $article->content !!}</p>
                        </div>
                        <div class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                                                       
                        </div>                         
                    </div>
                </div>
            </article>

            <!-- Newsletter -->
        </div>        
        <!-- Wrapper end -->

        <!-- Footer start -->
        <footer id="uc-footer" class="uc-footer panel uc-dark">
            <div class="footer-outer py-4 lg:py-6 bg-gray-300 bg-opacity-10 dark:bg-gray-800 dark:bg-opacity-100">
                <div class="container max-w-xl">
                    <div class="footer-inner vstack gap-4 lg:gap-6">
                        <div class="uc-footer-top">
                            <div class="row child-cols lg:child-cols-2 justify-between g-4" data-uc-grid>
                                <div class="col-12 lg:col-5">
                                    <div class="vstack gap-3 dark:text-white">
                                        <a href="index.html">
                                            <img class="uc-logo w-80px text-gray-900 dark:text-white" src="../assets/images/demo-two/common/logo.svg" alt="News5" data-uc-svg>
                                        </a>
                                        <p class="fs-6 me-8">A comprehensive electronic newspaper that deals with all issues that concern national public opinion.</p>
                                        <ul class="nav-x gap-2">
                                            <li>
                                                <a class="hover:text-gray dark:hover:text-gray-200 transition-colors duration-200" href="#fb"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray dark:hover:text-gray-200 transition-colors duration-200" href="#x"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray dark:hover:text-gray-200 transition-colors duration-200" href="#in"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray dark:hover:text-gray-200 transition-colors duration-200" href="#yt"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div class="widget links-widget vstack gap-3">
                                        <div class="widgt-title">
                                            <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">Topics</h4>
                                        </div>
                                        <div class="widgt-content">
                                            <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                                <li><a href="blog-category.html">Social</a></li>
                                                <li><a href="blog-category.html">Politics</a></li>
                                                <li><a href="blog-category.html">Economy</a></li>
                                                <li><a href="blog-category.html">World</a></li>
                                                <li><a href="blog-category.html">Sports</a></li>
                                                <li><a href="blog-category.html">Arts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="widget links-widget vstack gap-3">
                                        <div class="widgt-title">
                                            <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">Trending now</h4>
                                        </div>
                                        <div class="widgt-content">
                                            <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                                <li><a href="blog-category.html">Podcats</a></li>
                                                <li><a href="blog-category.html">News TV</a></li>
                                                <li><a href="blog-category.html">National</a></li>
                                                <li><a href="blog-category.html">Global</a></li>
                                                <li><a href="blog-category.html">Dialogues</a></li>
                                                <li><a href="blog-category.html">Opinions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none lg:d-block">
                                    <div class="widget links-widget vstack gap-3">
                                        <div class="widgt-title">
                                            <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">About</h4>
                                        </div>
                                        <div class="widgt-content">
                                            <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Career</a></li>
                                                <li><a href="sign-in.html">Log in</a></li>
                                                <li><a href="sign-up.html">Create an account</a></li>
                                                <li><a href="#">Sitemap</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0 dark:border-gray-100">
                        <div class="uc-footer-bottom panel hstack gap-2 items-start justify-between fs-6 dark:text-white">
                            <div class="footer-copyright vstack sm:hstack gap-1 lg:gap-2">
                                <p>News5 © 2024, All rights reserved.</p>
                                <div class="vr d-none lg:d-block"></div>
                                <ul class="nav-x gap-2 fw-medium">
                                    <li><a href="page-privacy.html">Privacy policy</a></li>
                                    <li><a href="page-terms.html">Terms of use</a></li>
                                </ul>
                            </div>
                            <div class="footer-lang d-inline-block">
                                <a href="#lang_switcher" class="hstack gap-1 text-none fw-medium">
                                    <i class="icon icon-1 unicon-earth-filled"></i>
                                    <span>English</span>
                                    <span data-uc-drop-parent-icon=""></span>
                                </a>
                                <div class="p-2 bg-white dark:bg-gray-800 shadow-xs rounded w-150px" data-uc-drop="mode: click; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="nav-y gap-1 fw-medium items-end">
                                        <li><a href="#en">English</a></li>
                                        <li><a href="#ar">العربية</a></li>
                                        <li><a href="#ch">中文</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="https://html.themewant.com/news5/assets/js/libs/jquery.min.js"></script>
        <script defer src="../assets/js/libs/bootstrap.min.js"></script>

        <!-- include scripts -->
        <script defer src="https://html.themewant.com/news5/assets/js/libs/anime.min.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/libs/swiper-bundle.min.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/libs/scrollmagic.min.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/helpers/data-attr-helper.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/helpers/swiper-helper.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/helpers/anime-helper.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="https://html.themewant.com/news5/assets/js/uikit-components-bs.js"></script>

        <!-- include app script -->
        <script defer src="https://html.themewant.com/news5/assets/js/app.js"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    </body>
</html>
