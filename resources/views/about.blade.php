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
                                <li><a href="#"><span class="icon fa fa-map-marker"></span>123, Nairobi , Kenya</a></li>
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
                                <img src="images/resource/about.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Section-->

        <!--Video Section-->
        <section class="video-section" style="background-image:url(images/background/7.jpg)">
            <div class="auto-container">
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-icon"><span class="flaticon-play-button-5"></span></a>
                <div class="title">Crafted With Care</div>
                <h2>Watch Us On The Field</h2>
                <div class="text">Hopefully i can inspire and encourage you to try out new ways of building. <br> This video is a little more technical.</div>
            </div>
        </section>
        <!--End Video Section-->

        <!--Reason Section-->
        <section class="reason-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Image Column-->
                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                        <div class="image">
                            <img src="images/resource/image-2.png" alt="" />
                        </div>
                    </div>

                    <!--Content Column-->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">Whats Reasons</div>
                                <h2>Why Choose Us</h2>
                            </div>
                            <div class="text">You will receive exceptional customer service through the entire project with clear and open communication. We encourage client participation guaranteeing you of effective outcomes. You can relax knowing that your project is being managed by a knowledgeable, experienced team. We offer skilled, expert advice on both the structure and style of your home.</div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list">
                                        <li>
                                            <span class="icon fa fa-briefcase"></span>
                                            EXPERT & PROFESSIONAL
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list">
                                        <li>
                                            <span class="icon flaticon-diamond-1"></span>
                                            PROFESSIONAL APPROACH
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list">
                                        <li>
                                            <span class="icon fa fa-bank"></span>
                                            HIGHT QUALITY WORK
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list">
                                        <li>
                                            <span class="icon flaticon-victory-sign"></span>
                                            SATISFACTION GUARANTEE
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Reason Section-->

        <!--About Section-->
        <section class="about-section-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">About Us</div>
                                <h2>The Leader in The Architectura!</h2>
                            </div>
                            <div class="text">For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other</div>

                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list-two">
                                        <li>
                                            <span class="icon fa fa-briefcase"></span>
                                            Expert & Professional
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list-two">
                                        <li>
                                            <span class="icon flaticon-diamond-1"></span>
                                            Professional Approach
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list-two">
                                        <li>
                                            <span class="icon fa fa-bank"></span>
                                            Hight Quality Work
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="reason-list-two">
                                        <li>
                                            <span class="icon flaticon-victory-sign"></span>
                                            Satisfaction Guarantee
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Blocks Column-->
                    <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="row clearfix">

                                <!--About Block-->
                                <div class="about-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="about.html"><img src="images/resource/about-1.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="about.html">Construction</a></h3>
                                            <div class="text">invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</div>
                                        </div>
                                    </div>
                                </div>

                                <!--About Block-->
                                <div class="about-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="about.html"><img src="images/resource/about-2.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="about.html">Renovation</a></h3>
                                            <div class="text">invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Section-->

        <!--Fluid Section One-->
        <section class="fluid-section-one">
            <div class="outer-container clearfix">

                <!--Image Column-->
                <div class="image-column" style="background-image:url(images/resource/image-3.jpg);">
                    <figure class="image-box"><img src="images/resource/image-3.jpg" alt=""></figure>
                </div>

                <!--Content Column-->
                <div class="content-column">
                    <div class="inner-column">
                        <div class="title">WE are Ready To Help</div>
                        <h2>Consult Our Experts</h2>
                        <div class="text">Give us any chance well take it give us any rule we will break it we are gonna make our dreams come true come and know on our door we have been waiting for you where the kisses are hers and his</div>

                        <!-- Consult Form -->
                        <div class="consult-form">

                            <!--Contact Form-->
                            <form method="post" action="https://expert-themes.com/html/emarat/contact.html">
                                <div class="row clearfix">

                                    <div class="column col-lg-6 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Name" required>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Projects Category</option>
                                                <option>Category One</option>
                                                <option>Category Two</option>
                                                <option>Category Three</option>
                                                <option>Category Four</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="text" placeholder="Budget Estimation" required>
                                        </div>

                                    </div>

                                    <div class="column col-lg-6 col-md-6 col-sm-12">

                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" placeholder="Massage (if any)"></textarea>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit Request</button>
                                        <div class="btn-detail"><span class="fa fa-arrow-circle-right"></span> Your Detail will be maintained confidentially</div>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Consult Form -->

                    </div>
                </div>

            </div>
        </section>
        <!--End Fluid Section One-->

        <!--Sponsors Section-->
        <section class="sponsors-section" style="background-image:url(images/background/5.jpg)">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Sponsors Section-->

        <!--Main Footer-->
        <footer class="main-footer" style="background-image:url(images/background/6.jpg)">

            <div class="auto-container">

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index-2.html"><img src="images/footer-logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">Thewebmax ipsum amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat. ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .</div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Working Hours</h2>
                                        <ul class="list-style-one">
                                            <li><span class="icon fa fa-envelope"></span>185, Pickton Near Street, Los Angeles, USA</li>
                                            <li><span class="icon fa fa-phone"></span>info@sentiment.com</li>
                                            <li><span class="icon fa fa-map-marker"></span>support@sentiment.com</li>
                                            <li><span class="icon fa fa-clock-o"></span>1-800-985-357</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget news-widget">
                                        <h2>Latest News</h2>
                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-image-1.jpg" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">Planning Process Needs to improve your Business.</a></h3>
                                                <div class="post-date">28 Dec, 2017</div>
                                            </div>
                                        </div>

                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-image-2.jpg" alt="" />
                                                </div>
                                                <h3><a href="blog-detail.html">7 Tips To Move Your Project Move Forward.</a></h3>
                                                <div class="post-date">13 Oct, 2017</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="footer-widget map-widget">
                                        <h2>Our Branches</h2>
                                        <div class="image">
                                            <img src="images/resource/map.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

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