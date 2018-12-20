<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Flattern - Flat and trendy bootstrap site template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jcarousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="{{ asset('skins/default.css') }}" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}" />
    <link rel="shortcut icon" href="{{ asset('ico/favicon.png') }}" />

    <!-- =======================================================
      Theme Name: Flattern
      Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<div id="wrapper">
    <!-- start header -->
    <nav class="navbar-fixed-top">
        <header style="background-color: #FAFBFC">
            <div class="container">
                <!-- end toggle link -->
                <div class="row">
                    <div class="span4" style="margin-top: 33px">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" class="logo" style="size: auto;" /></a>
                            {{--<h1>Flat and trendy bootstrap template</h1>--}}
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="dropdown active">
                                            <a href="index.html">Home <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-alt2.html">Homepage 2</a></li>
                                                <li><a href="index-alt3.html">Homepage 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Features <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="table.html">Table</a></li>
                                                <li><a href="components.html">Components</a></li>
                                                <li><a href="animations.html">56 Animations</a></li>
                                                <li><a href="icons.html">Icons</a></li>
                                                <li><a href="icon-variations.html">Icon variations</a></li>
                                                <li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
                                                    <ul class="dropdown-menu sub-menu-level1">
                                                        <li><a href="index.html">Nivo slider</a></li>
                                                        <li><a href="index-alt2.html">Slit slider</a></li>
                                                        <li><a href="index-alt3.html">Parallax slider</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="pricingbox.html">Pricing boxes</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                                <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                                <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                                <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                                <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </nav>
    <!-- end header -->
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Browse pages</h5>
                        <ul class="link-list">
                            <li><a href="#">About our company</a></li>
                            <li><a href="#">Our services</a></li>
                            <li><a href="#">Meet our team</a></li>
                            <li><a href="#">Explore our portfolio</a></li>
                            <li><a href="#">Get in touch with us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Important stuff</h5>
                        <ul class="link-list">
                            <li><a href="#">Press release</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Career center</a></li>
                            <li><a href="#">Flattern forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Flickr photostream</h5>
                        <div class="flickr_badge">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Get in touch with us</h5>
                        <address>
                            <strong>Flattern studio, Pte Ltd</strong><br>
                            Springville center X264, Park Ave S.01<br>
                            Semarang 16425 Indonesia
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="copyright">
                            <p>
                                <span>&copy; Flattern - All right reserved.</span>
                            </p>
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                                -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jcarousel/jquery.jcarousel.min.j') }}s"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('js/google-code-prettify/prettify.js') }}"></script>
<script src="{{ asset('js/portfolio/jquery.quicksand.js') }}"></script>
<script src="{{ asset('js/portfolio/setting.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/jquery.ba-cond.min.js') }}"></script>
<script src="{{ asset('js/jquery.slitslider.js') }}"></script>
<script src="{{ asset('js/animate.js') }}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
