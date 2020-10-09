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
                            <div class="text">Welcome To Think GTM Ventures Ltd Website</div>
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
                <h1>Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Contact Form Section-->
        <section class="contact-form-section">
            <div class="auto-container">
                <!--Title Box-->
                <div class="title-box">
                    <div class="title">Write a Message</div>
                    <h2>Have Any Questions?</h2>
                    <div class="text">Thank you very much for your interest in our company and our services and if you have any questions, please drop a message now!</div>
                </div>

                <!--Contact Form-->
                <div class="contact-form">
                    <form method="post" action="https://expert-themes.com/html/emarat/sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="firstname" value="" placeholder="Your name" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" name="email" value="" placeholder="Your Email" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>

                            <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn message-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Contact Form-->

            </div>
        </section>
        <!--End Contact Form Section-->

        <!--Contact Page Info Section-->
        <div class="contact-page-info-section">

            <div class="auto-container">
                <div class="row clearfix">

                    <!--Info Column-->
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">Contact us</div>
                                <h2>Get in Touch</h2>
                            </div>
                            <ul class="list-style-two">
                                <li><span class="icon fa fa-phone"></span>Call us +254 720 256 991</li>
                                <li><span class="icon fa fa-envelope"></span>info@thinkgtmventuresltd.co.ke</li>
                                <li><span class="icon fa fa-envelope"></span>quriskyalo@gmail.com</li>
                                <li><span class="icon fa fa-map-marker"></span>Open Hours 08:00 AM - 06:00 PM</li>
                                <li><span class="icon fa fa-clock-o"></span>Nairobi, Kenya</li>
                            </ul>
                            <ul class="social-icon-two">
                                <li class="follow">Follow on: </li>
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Map Column-->
                    <div class="map-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!--Map Outer-->
                            <div class="map-outer">
                                <!--Map Canvas-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26833.382089357485!2d36.80723800223571!3d-1.2906399220195242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1602248587948!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Contact Page Info Section -->

            <!--Main Footer-->
            <footer class="main-footer" style="background-image:url(images/background/6.jpg)">

                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="copyright">Copyrights <?php echo date('Y'); ?>. All Rights are Reserved. Crafted by <a href="https://martdev.info">MartDevelopers Inc</a></div>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="footer-nav">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                                    <li><a href="{{ url('/contacts') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

</body>
@include('partials._scripts')

</html>