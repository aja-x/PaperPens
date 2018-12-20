<style>
    @media (min-width: 768px) {
        .navbar-nav {
            width: 100%;
            text-align: center;
        }
        .navbar-nav > li {
            float: none;
            display: inline-block;
        }
        .navbar-nav > li.navbar-right {
            float: right !important;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }
        .navbar-nav > li.navbar-right > a {
            color: white;
        }
        /*.navbar-nav > li.navbar-right > a:hover {*/
            /*color: red;*/
        /*}*/
        /*.navbar-nav > li.navbar-right > a:active {*/
            /*color: red;*/
        /*}*/
    }
</style>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Post left sidebar</h2>
                </div>
            </div>
            <div class="span8">
                <div class="">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
                        <li class="active">Blog post left sidebar</li>
                    </ul>
                </div>
                <div class="navbar">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="dropdown navbar-right">
                                <a href="#">master <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">departemen</a></li>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-right">
                                <a href="{{ route('admin.dosen.index') }}">dosen </a>
                            </li>
                            <li class="navbar-right">
                                <a href="{{ route('admin.paper.index') }}">paper </a>
                            </li>
                            <li class="navbar-right">
                                <a href="{{ route('admin.index') }}">profile </a>
                            </li>
                            {{--<li class="dropdown navbar-right">--}}
                                {{--<a href="#" style="color: white;">Features <i class="icon-angle-down"></i></a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="typography.html">Typography</a></li>--}}
                                    {{--<li><a href="table.html">Table</a></li>--}}
                                    {{--<li><a href="components.html">Components</a></li>--}}
                                    {{--<li><a href="animations.html">56 Animations</a></li>--}}
                                    {{--<li><a href="icons.html">Icons</a></li>--}}
                                    {{--<li><a href="icon-variations.html">Icon variations</a></li>--}}
                                    {{--<li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>--}}
                                        {{--<ul class="dropdown-menu sub-menu-level1">--}}
                                            {{--<li><a href="index.html">Nivo slider</a></li>--}}
                                            {{--<li><a href="index-alt2.html">Slit slider</a></li>--}}
                                            {{--<li><a href="index-alt3.html">Parallax slider</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
