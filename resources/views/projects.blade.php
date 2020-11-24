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
                                <li><a href="#"><span class="icon fa fa-map-marker"></span>Corner House, 12th Floor, Wing A Room A4, Nairobi, Kenya</a></li>
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
        <section class="page-title" style="background-image:url(public/images/background/13.jpg)">
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
                                    <img src="{{ url('public/images/gallery/achi_services.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/IMG-20200926-WA0007.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>


                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('public/images/gallery/exteriour_design.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/land_proprty_selling.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/IMG-20200925-WA0025.jpg') }}" alt="" />
                                    <!--Overlay Two-->
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('public/images/gallery/extr.jpg') }}" alt="" />
                                    <!--Overlay Two-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Page Section-->
        
         <section class="project-page-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="title">Our Heavy Duty Industrial Grade Machines For Hire</div>
                    <div class="seperater"></div>
                </div>
               <div class="mixitup-gallery">

                    <div class="filter-list row clearfix">

                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('public/images/gallery/Machinery_For_Hire1.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/Machinery_For_Hire2.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>


                        <!--Project Block-->
                        <div class="project-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ url('public/images/gallery/Machinery_For_Hire3.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/Machinery_For_Hire4.jpg') }}" alt="" />
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
                                    <img src="{{ url('public/images/gallery/Machinery_For_Hire5.jpg') }}" alt="" />
                                    <!--Overlay Two-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video Section-->
        <section class="video-section" style="background-image:url(public/images/gallery/excavation2.jpeg)">
        	<div class="auto-container">
            	<a href="{{ url('public/images/ThinkGTM.mp4') }}" class="lightbox-image play-icon">
            	    <span class="flaticon-play-button-5"></span></a>
                <div class="title"></div>
                <h2>Watch Us On The Field</h2>
                <div class="text">Watch ThinkGTM Ventures In Action</div>
            </div>
        </section>
        <footer class="main-footer" style="background-image:url(public/images/background/6.jpg)">
            @include('partials._footer')
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    @include('partials._scripts')
</body>

</html>
