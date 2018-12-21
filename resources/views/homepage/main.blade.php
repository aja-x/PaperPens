@extends('homepage.app')

@section('content')

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

@endsection
