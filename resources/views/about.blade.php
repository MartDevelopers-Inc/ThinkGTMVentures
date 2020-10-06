@include('partials._head')

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

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

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/13.jpg)">
            <div class="auto-container">
                <h1>About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--About Section-->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">About Us</div>
                                <h2>Think GTM Ventures Ltd, We Are The Leader in The Architectura!</h2>
                            </div>
                            <div class="bold-text">36 Years Experience Working</div>
                            <div class="text">For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other.</div>
                            <a href="#" class="theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{ url('images/resource/about.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Section-->

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