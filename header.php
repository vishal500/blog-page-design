<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!-- bootsnav -->
    <link rel="stylesheet" href="css/bootsnav.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body>
    <!-- start header -->
    <header class=" header-appear">
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav background-white header-light navbar-expand-lg  navhad">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-auto pl-lg-0">
                    <a href="index.php" title="Pofo" class="logo"><img src="images/logo.png" data-rjs="images/logo@2x.png" class="logo-dark default" alt="Pofo"><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
                </div>
                <!-- end logo -->
                <div class="col accordion-menu pr-0 pr-md-3">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <?php  for ($j=1; $j < 6; $j++) {  ?>
                               
                      
                            <li class="dropdown megamenu-fw">
                                <a href="#">Category <?php echo $j; ?></a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                <!-- start sub menu -->
                                <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                    <ul>
                                        <!-- start sub menu column  -->
                                        <li class="mega-menu-column col-lg-3 mega_menu">
                                            <!-- start sub menu item  -->
                                            <ul>
                                            <?php  for ($k=1; $k < 10; $k++) {  ?>
                                                <li><a class="text-white" href="post.php">Sub cat <?php echo $k; ?></a></li>
                                               
                                                <?php  }  ?>
                                            </ul>

                                            <!-- end sub menu item  -->
                                        </li>
                                        <!-- end sub menu column -->

                                        <!-- start sub menu column  -->
                                        <li class="mega-menu-column col-lg-9 d-none d-lg-block header_x">

                                            <div class="row1">
                                                <?php for ($i = 0; $i < 4; $i++) {  ?>



                                                    <!-- start post item -->
                                                    <div class="col-12 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom">
                                                        <div class="blog-post blog-post-style1 text-center text-md-left">
                                                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                                                <a href="blog-post-layout-01.html">
                                                                    <img src="http://www.themezaa.com/html/pofo/images/blog-img15.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-details">
                                                                <a href="blog-post-layout-01.html" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">I try to look at design from a more conceptual standpoint.</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post item -->
                                                <?php  }  ?>

                                            </div>
                                        </li>
                                        <!-- end sub menu column  -->
                                    </ul>
                                    <!-- end sub menu -->
                                </div>
                            </li>
                            <?php      }  ?>
                        </ul>
                    </div>
                </div>
                <div class="col-auto pr-lg-0">
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fas fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <div class="header-social-icon d-none d-md-inline-block">
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->