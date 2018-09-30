
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png">
        <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../assets/images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="../../assets/css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="../../assets/css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="../../assets/css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="../../assets/css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="../../assets/css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="../../assets/css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="../../assets/css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="../../assets/css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="../../assets/css/responsive.css" />
        <!--[if IE]>
            <script src="../../assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav bg-white nav-box-width">
                <div class="container nav-header-container">
                    <div class="row">
                        <!-- start logo -->
                        <div class="col-md-2 col-xs-5">
                            <a href="index.html" title="Pofo" class="logo"><img src="../../assets/images/logo.png" data-rjs="images/logo@2x.png" class="logo-dark default" alt="Pofo"><img src="../../assets/images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
                        </div>
                        <!-- end logo -->  
                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                                <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                    <!-- start menu item -->
                                    <li class="dropdown megamenu-fw">
                                        <a href="javascript:void(0);">Home</a>
                                    </li>
                                    <!-- end menu item -->

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
        <!-- start product banner section -->
        <section class="no-padding cover-background one-fourth-screen top-space" style="background-image: url('../../assets/images/portfolio-detail-bg.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 no-padding">

                    </div>
                </div>
            </div>
        </section>
        <!-- end product banner section -->
        <!-- start product information section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-bottom sm-margin-50px-bottom xs-margin-30px-bottom">
                        <h4 class="font-weight-300 text-extra-dark-gray margin-15px-bottom">{{$product['title']}}</h4>
                        <span class="text-deep-pink text-large border-bottom border-color-deep-pink font-weight-300">{{$product['tagline']}}</span>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-1 line-height-28 last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn">
                        <p>{{$product['body']}}</p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-1 line-height-26 wow fadeIn">
                        <ul class="list-style-6 margin-twelve-left">
                        @foreach($product['details'] as $key=>$val)
                            <li class="margin-5px-bottom"><label class="width-30 display-inline-block">{{$key}}:</label>{{$val}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product information section -->
        <!-- start product images section -->
        <section class="bg-extra-dark-gray">
            <div class="container-fluid padding-five-lr sm-padding-30px-lr">
                <div class="row">
                @foreach($product['block1'] as $key=>$val)
                    <!-- start product item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp">
                        <img src="../../assets/images/{{$val['image']}}" alt="{{$val['alt']}}" />
                    </div>
                    <!-- end product item -->
                @endforeach
                    <!-- start product item -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <img src="../../assets/images/brochure-2.jpg" alt="brochure image" />
                    </div> -->
                    <!-- end product item -->
                    <!-- start product item -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <img src="../../assets/images/brochure-3.jpg" alt="brochure image" />
                    </div> -->
                    <!-- end product item -->
                </div>
            </div>
        </section>
        <!-- end product images section -->
        <!-- start product quotes section -->
        <section class="wow fadeIn no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="margin-eight-bottom sm-margin-50px-bottom xs-margin-20px-bottom pull-left">
                        @foreach($product['block2'] as $key=>$val)
                            <div class="col-md-6 col-sm-12 col-xs-12 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
                                <h5 class="font-weight-300 text-extra-dark-gray">{{$val['quote']}}</h5>
                                <p class="font-weight-300 text-medium text-medium-gray">- {{$val['person']}}</p>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-1 wow fadeInUp"  data-wow-delay="0.2s">
                                <p>{{$val['right_desc']}}</p>
                            </div>
                        @endforeach
                        <!-- <div class="col-md-6 col-sm-12 col-xs-12 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
                            <h5 class="font-weight-300 text-extra-dark-gray">Holistic brand redesign focusing product design, interface design, studio photograph style, icon design, editorial design, web design & motion design.</h5>
                            <p class="font-weight-300 text-medium text-medium-gray">- Paul Rand / Creative Director</p>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-1 wow fadeInUp"  data-wow-delay="0.2s">
                            <p>Koordinaten bilden die Grundlage für Einsatz des Produktes ausgerichtete Corporate Design. Reale Daten wie zum Beispiel Wetterdaten, Geografische Flächen und Höhenmeter, werden in das Design in mit einbezogen. Die neu gestaltete Marke zeichnet sich sowohl durch userorientierte Einsatz. die in Grundlage für das Einsatz von des Produktes ausgerichtete Corporate Voin Design. in Reale Daten wie zum Beispiel Wetterdaten, Geog rafische Koordi naten und Höhenmeter, werden in das Design mit einbezogen. </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp">
                        <img src="../../assets/images/portfolio-detail-design.png" alt=""/>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- end product quotes section -->
        <!-- start section -->
        <section class="wow fadeIn bg-extra-dark-gray no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        @foreach($product['block3'] as $key=>$val)
                        <img src="../../assets/images/{{$val['logo']}}" alt="{{$val['logo_title']}}" class="margin-40px-bottom sm-margin-30px-bottom"/>
                        <h6 class="font-weight-300 text-medium-gray width-65 center-col sm-width-80">{{$val['description']}}</h6>
                        <div class="height-600px position-relative margin-100px-top sm-margin-50px-tb wow fadeInUp sm-height-auto"><img src="../../assets/images/{{$val['image']}}" alt="{{$val['image_alt']}}"/></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="wow fadeIn big-section">
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center wow zoomIn"><img src="../../assets/images/portfolio-detail-img-4.png" alt=""/></div>
                </div>
            </div> -->
        </section>
        <!-- end section -->
        <!-- start product gallery section -->
        <section class="wow fadeIn no-padding">
            <div class="container-fluid no-padding">
                <div class="row no-margin">
                    <ul class="portfolio-grid work-4col hover-option4 lightbox-gallery">
                        <li class="grid-sizer"></li>
                        @foreach($product['block4'] as $key=>$val)
                        <!-- start portfolio item -->
                        <li class="grid-item web branding design wow fadeInUp">
                            <a href="../../assets/images/{{$val['image']}}" title="{{$val['title']}}">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="../../assets/images/{{$val['image']}}" alt="" class="project-img-gallery"/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <i class="ti-zoom-in text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <!-- end product gallery section -->
        <!-- start blog navigation bar section -->
        <section class="wow fadeIn border-top border-width-1 border-color-medium-gray no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="display-table width-100 padding-30px-lr sm-padding-15px-lr">
                        <div class="width-45 text-left display-table-cell vertical-align-middle">
                            <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
                                <span class="text-medium-gray text-extra-small display-block text-uppercase xs-display-none">Previous Product</span>
                                <a href="../every7">
                                    <i class="ti-arrow-left blog-nav-icon"></i>
                                    Home
                                </a>
                            </div>
                        </div>
                        <div class="width-10 text-center display-table-cell vertical-align-middle">
                            <a href="portfolio-boxed-grid-overlay.html" class="blog-nav-link blog-nav-home"><i class="ti-layout-grid2-alt"></i></a>
                        </div>
                        <div class="width-45 text-right display-table-cell vertical-align-middle">
                            <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">    
                                <span class="text-medium-gray text-extra-small display-block text-uppercase xs-display-none">Next Product</span>
                                <a href="../every7">
                                    <i class="ti-arrow-right blog-nav-icon"></i>
                                    Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog navigation bar section -->
        <!-- start footer --> 
        <footer class="footer-standard-dark bg-extra-dark-gray"> 
            <div class="footer-widget-area padding-five-tb xs-padding-30px-tb">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray sm-no-border-right sm-margin-30px-bottom xs-text-center">
                            <!-- start logo -->
                            <a href="index.html" class="margin-20px-bottom display-inline-block"><img class="footer-logo" src="../../assets/images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo"></a>
                            <!-- end logo -->
                            <p class="text-small width-95 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <!-- start social media -->
                            <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                <ul class="small-icon no-margin-bottom">
                                    <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google text-white" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- end social media -->
                        </div>
                        <!-- start additional links -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-no-border-right sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Additional Links</div>
                            <ul class="list-unstyled">
                                <li><a class="text-small" href="index.html">Home Classic Corporate</a></li>
                                <li><a class="text-small" href="home-creative-business.html">Home Creative Business</a></li>
                                <li><a class="text-small" href="home-creative-designer.html">Home Creative Designer</a></li>
                                <li><a class="text-small" href="home-portfolio-minimal.html">Home Portfolio Minimal</a></li>
                                <li><a class="text-small" href="home-portfolio-parallax.html">Home Portfolio  parallax</a></li>
                                <li><a class="text-small" href="home-portfolio-personal.html">Home Portfolio Personal</a></li>
                            </ul>
                        </div>
                        <!-- end additional links -->
                        <!-- start contact information -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-clear-both sm-no-border-right  xs-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Contact Info</div>
                            <p class="text-small display-block margin-15px-bottom width-80 xs-center-col">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                            <div class="text-small">Email: <a href="mailto:sales@domain.com">sales@domain.com</a></div>
                            <div class="text-small">Phone: +44 (0) 123 456 7890</div>
                            <a href="contact-us-modern.html" class="text-small text-uppercase text-decoration-underline">View Direction</a>
                        </div>
                        <!-- end contact information -->
                        <!-- start instagram -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Instagram portfolio</div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="bg-dark-footer padding-50px-tb text-center xs-padding-30px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">&copy; 2017 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" class="text-dark-gray">ThemeZaa</a></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">
                            <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="../../assets/js/jquery.js"></script>
        <script type="text/javascript" src="../../assets/js/modernizr.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../../assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="../../assets/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="../../assets/js/bootsnav.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="../../assets/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="../../assets/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="../../assets/js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="../../assets/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="../../assets/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="../../assets/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="../../assets/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="../../assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="../../assets/js/classie.js"></script>
        <script type="text/javascript" src="../../assets/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="../../assets/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="../../assets/js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="../../assets/js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="../../assets/js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="../../assets/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="../../assets/js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="../../assets/js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="../../assets/js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="../../assets/js/main.js"></script>
    </body>
</html>