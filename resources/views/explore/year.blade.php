@extends('layouts.app')
@section('content')
<section id="featured">
    <!-- start slider -->
    <!-- Slider -->
    <div id="nivo-slider">
        <div class="nivo-slider">
            <!-- Slide #1 image -->
            <img src="{{ asset('img/slides/nivo/bg-1.jpg') }}" alt="" title="#caption-1" />
            <!-- Slide #2 image -->
            <img src="{{ asset('img/slides/nivo/bg-2.jpg') }}" alt="" title="#caption-2" />
            <!-- Slide #3 image -->
            <img src="{{ asset('img/slides/nivo/bg-3.jpg') }}" alt="" title="#caption-3" />
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- Slide #1 caption -->
                    <div class="nivo-caption" id="caption-1">
                        <div>
                            <h2>Awesome <strong>features</strong></h2>
                            <p>
                                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                            </p>
                            <a href="#" class="btn btn-theme">Read More</a>
                        </div>
                    </div>
                    <!-- Slide #2 caption -->
                    <div class="nivo-caption" id="caption-2">
                        <div>
                            <h2>Fully <strong>responsive</strong></h2>
                            <p>
                                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                            </p>
                            <a href="#" class="btn btn-theme">Read More</a>
                        </div>
                    </div>
                    <!-- Slide #3 caption -->
                    <div class="nivo-caption" id="caption-3">
                        <div>
                            <h2>Very <strong>customizable</strong></h2>
                            <p>
                                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                            </p>
                            <a href="#" class="btn btn-theme">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->
</section>
<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="big-cta">
                    <div class="cta-text">
                        <h3>By Year</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span3">
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <br><a href="2012" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2012</a></br>
                                <br><a href="2013" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2013</a></br>
                                <br><a href="2014" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2014</a></br>
                                <ul>
                                  <strong>Paper :</strong>
                                  @foreach ($tahun as $data)
                                  <li>{{$data['judul_paper']}}</li>
                                  @endforeach
                                </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
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
