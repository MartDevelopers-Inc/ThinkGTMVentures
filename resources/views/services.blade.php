@include('partials/_head')

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">

            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left clearfix">
                            <ul class="links clearfix">
                                <li><a href="#"><span class="icon fa fa-map-marker"></span>Nairobi, Kenya</a></li>
                                <li><a href="mailto:info@thinkgtmventuresltd.co.ke"><span class="icon fa fa-envelope"></span>info@thinkgtmventuresltd.co.ke</a></li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right pull-right">
                            <div class="text">Welcome to Think GTM Ventures Ltd Website</div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            @include('partials._header-upper')
            <!--End Header Upper-->

            <!--Header Lower-->
            @include('partials._header-lower')
            <!--End Header Lower-->

            <!--Sticky Header-->
            @include('partials._navigation')
            <!--End Sticky Header-->

        </header>

        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/13.jpg)">
            <div class="auto-container">
                <h1>Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Services Section-->
        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <div class="title">Our Services</div>
                    <h2>What We Do</h2>
                    <div class="seperater"></div>
                </div>
                <div class="row clearfix">

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/gallery/achi_services.jpg)">
                            <div class="icon-box">
                                <span class="icon flaticon-sketch"></span>
                            </div>
                            <h3><a href="">Architectural Services</a></h3>
                            <div class="text">
                                We offer construction services of houses and roads.
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                            <div class="icon-box">
                                <span class="icon flaticon-house-plans"></span>
                            </div>
                            <h3><a href="">Interior Designing</a></h3>
                            <div class="text">
                                We offer interior design fitting and petitioning services.
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/resource/)">
                            <div class="icon-box">
                                <span class="icon flaticon-skyline"></span>
                            </div>
                            <h3><a href="">Exterior Design</a></h3>
                            <div class="text">We offer land scaping and exterior design services.</div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                            <div class="icon-box">
                                <span class="icon flaticon-document"></span>
                            </div>
                            <h3><a href="">Construction Machine Leasing</a></h3>
                            <div class="text">
                                We offer leasing services of construction machines.
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                            <div class="icon-box">
                                <span class="icon flaticon-accounting"></span>
                            </div>
                            <h3><a href="">General Supplies</a></h3>
                            <div class="text">
                                We supply raw materials for construction such as sand, murram, ballast, cement, construction bars etc.
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                            <div class="icon-box">
                                <span class="icon flaticon-briefing"></span>
                            </div>
                            <h3><a href="">Land / Property Buying And Selling.</a></h3>
                            <div class="text">
                                We purchase and sale lands and properties.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Services Section-->



        <!--Main Footer-->
        <footer class="main-footer" style="background-image:url(images/background/6.jpg)">

            <!--Footer Bottom-->
            @include('partials._footer')

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


    @include('partials._scripts')
</body>

</html>