@include('partials._head')

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
                <h1>Projects</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Project Page Section-->
        <section class="project-page-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="title">Our Projects</div>
                    <div class="seperater"></div>
                </div>
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">

                    <div class="filter-list row clearfix">

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/achi_services.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/IMG-20200926-WA0007.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>


                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/exteriour_design.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/land_proprty_selling.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/IMG-20200925-WA0025.jpg') }}" alt="" />
                                    <!--Overlay Two-->
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('images/gallery/extr.jpg') }}" alt="" />
                                    <!--Overlay Two-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Project Page Section-->

        <!--Subscribe Section-->
        <section class="subscribe-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Form Column-->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <h2>Need more information?</h2>
                        <div class="text">Please email us and our support staff will contact you back</div>
                        <div class="icon-box">
                            <span class="icon flaticon-envelope-1"></span>
                        </div>
                    </div>
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="subscribe-form">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter your mail" required>
                                        <button type="submit" class="theme-btn">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Subscribe Section-->

        <!--Main Footer-->
        <footer class="main-footer" style="background-image:url(images/background/6.jpg)">
            @include('partials._footer')
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    @include('partials._scripts')
</body>

</html>