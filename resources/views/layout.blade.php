<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || Felak Concept Group </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="//assets/images/felakgroup.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="//assets/images/felakgroup.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="//assets/images/felakgroup.png" />
    <link rel="manifest" href="//assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Felak Group" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/vendors/cleenhearts-icons/style.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>

<body  class="custom-cursor">

<div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(//assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
<div class="page-wrapper">
        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.html">
                            <img class="felak-logo-img" src="" alt="felak group" width="130">
                        </a>
                        <button type="button" class="main-header__sidebar-btn sidebar-btn__toggler">
                            <span class="icon-grid"></span>
                        </button><!-- /.main-header__sidebar-btn -->
                    </div><!-- /.main-header__logo -->
                    <div class="main-header__right">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">
                                <li class="{{$page == 'Home' ? 'current' : ''}}">
                                    <a href="{{route('index')}}">Home</a>
                                </li>
                                <li class="{{$page == 'About' ? 'current' : ''}}">
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                <li class="{{$page == 'Subsidiaries' ? 'current' : ''}}">
                                    <a href="{{route('subsidiaries')}}">Subsidiaries</a>
                                </li>
                                <li class="{{$page == 'Team' ? 'current' : ''}}">
                                    <a href="{{route('team')}}">Team</a>
                                </li>
                                <li class="{{$page == 'CSR' ? 'current' : ''}}">
                                    <a href="{{route('csr')}}">CSR</a>
                                </li>
                                <li class="{{$page == 'Blog' ? 'current' : ''}}">
                                    <a href="{{route('blog')}}">Blog</a>
                                </li>
                                <li class="{{$page == 'Contact' ? 'current' : ''}}">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->


                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container -->
        </header><!-- /.main-header -->
        <!-- main-slider-start -->


        @yield('content')
        <footer class="main-footer background-white2" style="margin-top: 100px;">
            <div class="main-footer__top">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-md-12 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="footer-widget footer-widget--about">
                                <a href="index.html" class="footer-widget__logo">
                                    <img src="//assets/images/logo-dark.png" width="159" alt="Cleenhearts HTML Template">
                                </a>
                                <p class="footer-widget__about-text">At Felak Group, our subsidiaries are united by excellence and integrity. Spanning diverse sectors, we strive to make a positive impact across the globe.</p>
                            </div><!-- /.footer-widget -->

                        </div><!-- /.col-md-12 col-xl-3 -->
                        <div class="col-xl-3 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="footer-widget footer-widget--contact">
                                <h2 class="footer-widget__title">Get in touch!</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__info">
                                    <li> <span class="icon-location"></span>
                                        <address>6C, Rudolf Close,
                                            Off Katsina-ala Crescent,
                                            Maitama, Abuja.
                                            </address>
                                    </li>
                                    <li> <span class="icon-phone"></span><a href="tel:+234 (0) 810 388 0336">+234 (0) 810 388 0336</a></li>
                                    <li> <span class="icon-envelope"></span><a href="mailto:info@felakgroup.net">info@felakgroup.net</a></li>
                                </ul><!-- /.list-unstyled -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-3 col-md-5 -->
                        <div class="col-md-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="footer-widget footer-widget--links">
                                <h2 class="footer-widget__title">Quick Links</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="subsidiaries.html">Subsidiaries</a></li>
                                    <li><a href="csr.html">CSR</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-4 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="footer-widget footer-widget--news">
                                <h2 class="footer-widget__title">Recent news</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__news">
                                    <div class="footer-widget__news__single">
                                        <div class="footer-widget__news__image">
                                            <img src="/assets/images/blog/footer-widget-blog-1-1.png" alt="blog">
                                        </div><!-- /.footer-widget__news__image -->
                                        <div class="footer-widget__news__content">
                                            <h3 class="footer-widget__news__title"><a href="blog-details-right.html">There are many varia of passages of</a></h3><!-- /.footer-widget__news__title -->
                                            <div class="footer-widget__news__meta">
                                                <span class="footer-widget__news__date">2 weeks ago</span>
                                            </div><!-- /.footer-widget__news__meta -->
                                        </div><!-- /.footer-widget__news__content -->
                                    </div><!-- /.footer-widget__news__single -->
                                    <div class="footer-widget__news__single">
                                        <div class="footer-widget__news__image">
                                            <img src="/assets/images/blog/footer-widget-blog-1-2.png" alt="blog">
                                        </div><!-- /.footer-widget__news__image -->
                                        <div class="footer-widget__news__content">
                                            <h3 class="footer-widget__news__title"><a href="blog-details-right.html">Mauris gravida lacus metus, ac sagittis</a></h3><!-- /.footer-widget__news__title -->
                                            <div class="footer-widget__news__meta">
                                                <span class="footer-widget__news__date">2 weeks ago</span>
                                            </div><!-- /.footer-widget__news__meta -->
                                        </div><!-- /.footer-widget__news__content -->
                                    </div><!-- /.footer-widget__news__single -->
                                </div><!-- /.footer-widget__news -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-4 col-xl-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="main-footer__bottom__bg" style="background: url('/assets/images/backgrounds/footer-bottom-bg-1-2.png');"></div><!-- /.main-footer__bottom-bg -->
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> Felak Group All Rights Reserved.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->


    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/felakgroup-logo-light.png" width="130" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto: info@felakgroup.net"> info@felakgroup.net</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:(406)555-0120">(406) 555-0120</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://linkedin.com/" aria-hidden="true">
                    <i class="fab fa-linkedin-in"></i>
                    <span class="sr-only">Linkedin</span>
                </a>
                <a href="https://youtube.com/" aria-hidden="true">
                    <i class="fab fa-youtube"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>

    <div class="search-popup @@extraClassName">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="cleenhearts-btn">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <script src="/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/swiper/js/swiper-bundle.min.js"></script>
    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
