<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PAPER PENS-Workshop Pemrograman Web</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <header>
        <div class="container ">
            <div class="row">
                <div class="span12">
                    <div class="headnav">
                        <ul>
                            <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                        </ul>
                    </div>
                    <!-- Sign in Modal -->
                    <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                        </div>s
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputText">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputText" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputSigninPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputSigninPassword" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Sign in</button>
                                    </div>
                                    <p class="aligncenter margintop20">
                                        Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end signin modal -->
                    <!-- Reset Modal -->
                    <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputResetEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputResetEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Reset password</button>
                                    </div>
                                    <p class="aligncenter margintop20">
                                        We will send instructions on how to reset your password to your inbox
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span4">
                    <div class="logo">
                        <a href="https://www.pens.ac.id/"><img src="{{ asset('img/logo3.png') }}" width="150" height="150" alt="" class="logo"  /></a>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown active">
                                        <a href="#">Home <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Explore <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">By Year</a></li>
                                            <li><a href="topic/show">By Topics</a></li>
                                        </ul>
                                    </li>

                                    <li class="search-form">
                                        <form class="form-search" action="{{ route('search.cari') }}" method="GET">
                                            <input placeholder="Cari judul.." type="text" class="validate">
                                            <button type="submit" class="btn btn-square btn-theme" name="q">Search</button>
                                        </form>
                                    </li>
                                </ul>
                                 <!-- <ul class="search-form">
                                    <aside class="left-sidebar">
                                        <div class="widget">
                                            <form class="form-search">
                                                <input placeholder="Type something" type="text" class="input-medium search-query">
                                                <button type="submit" class="btn btn-square btn-theme">Search</button>
                                            </form>
                                        </div>
                                    </aside>
                                </ul> -->
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <div id="nivo-slider">
            <div class="nivo-slider">
                <!-- Slide #1 image -->
                <img src="{{ asset('img/slides/ieee/gb-1.jpg') }}" alt="" title="#caption-1" />
                <!-- Slide #2 image -->
                <img src="{{ asset('img/slides/ieee/gb-2.jpg') }}" alt="" title="#caption-2" />
                <!-- Slide #3 image -->
                <img src="{{ asset('img/slides/ieee/gb-3.jpg') }}" alt="" title="#caption-3" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <!-- Slide #1 caption -->
                        <div class="nivo-caption" id="caption-1">
                            <div>
                                <h2><strong>SAE eBooks Library Coming Soon to IEEE Xplore</strong></h2>
                                <p>
                                    Get access to the latest research in mobility engineering addressing the hottest technology trends in aerospace, automotive, and commercial vehicle technologies.
                                </p>
                                <a href="#" class="btn btn-theme"><strong>Learn More</strong></a>
                            </div>
                        </div>
                        <!-- Slide #2 caption -->
                        <div class="nivo-caption" id="caption-2">
                            <div>
                                <h2><strong>Artificial Intelligence Enable Next Generation of Space Communication</strong></h2>
                                <p>
                                    Researchers believe the next generation of space communication systems could develop from a new autonomous architecture employing articial neural network.
                                </p>
                                <a href="#" class="btn btn-theme"><strong>Learn More</strong></a>
                            </div>
                        </div>
                        <!-- Slide #3 caption -->
                        <div class="nivo-caption" id="caption-3">
                            <div>
                                <h2><strong>Fog Computing for Smart City Applications</strong></h2>
                                <p>
                                    In a smart city, consistent data flows are critical. Researchers have developed a new fog computing anomaly detection system that can identify issues in smart city applications and quickly detect data flow interruptions.
                                </p>
                                <a href="#" class="btn btn-theme"><strong>Learn More</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider -->
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span5">
                    <h5 class="media-heading">
                        <i class="fa fa-clock-o" aria-hidden="true"></i><span>
                            Just Published
                        </span>
                        <div class="form-group"><strong>
                            <h4>{{ $data->judul_paper }}<h4></strong>
                        </div>
                    </h5>
                </div>
                <div class="span5">
                    <h5 class="media-heading">
                        <i class="fa fa-tachometer" aria-hidden="true"></i><span>
                            Most Popular
                        </span>
                    </h5>
                </div>
                <div class="span2">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">
                                <li><i class="icon-angle-right"></i><a href="#">Popular Search</a></li>

                                <li><i class="icon-angle-right"></i><a href="#">Peringkat Dosen</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Browse pages</h5>
                        <ul class="link-list">
                            <li><a href="https://www.pens.ac.id/">About PENS</a></li>
                            <li><a href="http://online.mis.pens.ac.id/">Online MIS</a></li>
                            <li><a href="http://lecturer.pens.ac.id/">Direktori Dosen</a></li>
                            <li><a href="http://repo.pens.ac.id/">EEPIS Repository</a></li>
                            <li><a href="https://emitter.pens.ac.id/index.php/emitter">EMITTER PENS</a></li>
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
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5 class="widgetheading">Get in touch with us</h5>
                        <address>
                            <strong>Politeknik Elektronika Negeri Surabaya</strong><br><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Jl. Raya ITS - Kampus PENS Sukolilo<br>
                            Surabaya 60111, INDONESIA
                        </address>
                        <p>
                            <i class="icon-phone"></i> +62 32 594 7280 <br>
                            <i class="icon-envelope-alt"></i>humas@pens.ac.id, info@pens.ac.id
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
                                <span>&copy; 2018 PAPER PENS </span>
                            </p>
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                                -->
                                Designed by <a href="#">Paper PENS</a>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <ul class="social-network">
                            <li><a href="https://www.facebook.com/pens.eepis" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                            <li><a href="https://twitter.com/penseepis" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                            <li><a href="https://www.youtube.com/user/penseepis" data-placement="bottom" title="Youtube"><i class="font-icon-social-youtube icon-square"></i></a></li>
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
