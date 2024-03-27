@include('ebandeli.ebandeli2')
@extends('auth.master_public')
@section('section')

<!-- Slider Area -->
<section class="slider call-action overlay">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/about-im.svg');background-position:right;background-size:450px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h1 class="text-white">Gérer votre école <span class="text-warning">Autrement !</span></h1>
                            <p>Nous vous assurons la bonne gestion de votre école,
                                surtout sur la sécurité et la fiabilité des informations
                                concernant votre établissement scolaires.</p>
                            <div class="button">
                                <a href="{{route('login')}}" class="btn">Gérer maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/feature-2.svg');background-position:right;background-size:450px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h1 class="text-white">Gérer votre école <span class="text-warning">Autrement !</span></h1>
                            <p>Nous vous assurons la bonne gestion de votre école,
                                surtout sur la sécurité et la fiabilité des informations
                                concernant votre établissement scolaires.</p>
                            <div class="button">
                                <a href="{{route('login')}}" class="btn">Gérer maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider " style="background-image:url('img/feature-5.svg');background-position:right;background-size:450px">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h1 class="text-white">Trouvez une meilleure école pour votre enfant !</h1>
                            <p>Nous vous assurons la bonne gestion de votre école,
                                surtout sur la sécurité et la fiabilité des informations
                                concernant votre établissement scolaires.</p>
                            <div class="button">
                                <a href="{{route('login')}}" class="btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="single-content">

                                <h4>Ecoles</h4><br>
                                <a href="#">Voir plus<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-users"></i>
                            </div>
                            <div class="single-content">

                                <h4>Elèves</h4><br>
                                <a href="#">Voir plus<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-prescription"></i>
                            </div>
                            <div class="single-content">

                                <h4>Evénéments</h4><br>
                                <a href="#">Voir plus<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->

<!-- Start Feautes -->
<section class="Feautes section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Emergency Help</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Enriched Pharmecy</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Medical Treatment</h3>
                    <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section>
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Ecoles</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">0</span>
                        <p>Elèves</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Visiteurs</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Evénéments</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->

<!-- Start Why choose -->
<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Who We Are</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est
                        lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec
                        gravida.</p>
                    <div class="button">
                        <a href="#" class="btn">Contact Now</a>
                        <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start portfolio -->
<section class="portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf1.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf2.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf3.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf4.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf1.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf2.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf3.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{asset('pu/img/pf4.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End portfolio -->

<!-- Start service -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-prescription"></i>
                    <h4><a href="service-details.html">General Treatment</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-tooth"></i>
                    <h4><a href="service-details.html">Teeth Whitening</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-heart-alt"></i>
                    <h4><a href="service-details.html">Heart Surgery</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-listening"></i>
                    <h4><a href="service-details.html">Ear Treatment</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-eye-alt"></i>
                    <h4><a href="service-details.html">Vision Problems</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Blood Transfusion</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
                    </p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!--/ End service -->

<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Provide You The Best Treatment In Resonable Price</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-ui-cut"></i>
                        </div>
                        <h4 class="title">Plastic Suggery</h4>
                        <div class="price">
                            <p class="amount">$199<span>/ Per Visit</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                        <li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
                        <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                        <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Book Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-tooth"></i>
                        </div>
                        <h4 class="title">Teeth Whitening</h4>
                        <div class="price">
                            <p class="amount">$299<span>/ Per Visit</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                        <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                        <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                        <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Book Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont-heart-beat"></i>
                        </div>
                        <h4 class="title">Heart Suggery</h4>
                        <div class="price">
                            <p class="amount">$399<span>/ Per Visit</span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                        <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                        <li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
                        <li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Book Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
        </div>
    </div>
</section>
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{asset('pu/img/blog1.jpg')}}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Aug, 2020</div>
                            <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{asset('pu/img/blog2.jpg')}}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Jul, 2020</div>
                            <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{asset('img/blog3.jpg')}}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start clients -->
<div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client1.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client2.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client3.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client4.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client5.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client1.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client2.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client3.png')}}" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="{{asset('pu/img/client4.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Ens clients -->

<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src="{{asset('pu/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Department</li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Doctor</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Doctor</li>
                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Date" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Book An Appointment</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( We will be confirm by an Text Message )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{asset('pu/img/contact-img.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->



@include('auth.footer_public')
@stop


@extends('auth.master_public', ['title'=>'Connexion'])
@section('section')

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Gérer votre école Autrement</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('ebandeli')}}">Accueil</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-1">
                </div>
                    <div class="col-lg-5">
                    <div class="contact-us-left">
                        <img class="mt-5" width="450" src="{{asset('/img/about-img.svg')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-us-form">
                        <h2>Se connecter</h2>
                        <p>Inserér votre numéro de téléphone.</p>
                        <!-- Form -->
                        <form class="form" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="telephone" type="text" placeholder="Téléphone">
                                        @error('telephone')
                                        <h6 class="text-left text-danger">
                                            {{ $message }}
                                        </h6>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="password" type="password" placeholder="Mot de passe">
                                        @error('password')
                                        <h6 class="text-dnager text-left">{{$message}}</h6>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Connexion</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-lock"></i>
                        <div class="content">
                            <h3>Mot de passe oublié</h3>
                            <p>Reinitialiser votre mot de passe</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <a href="{{route('register')}}">
                    <div class="single-info">
                        <i class="icofont-users"></i>
                        <div class="content">
                            <h3>Créer un compte</h3>
                            <p>Pour gérer votre école</p>
                        </div>
                    </div>
                </a>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Mon - Sat: 8am - 5pm</h3>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
            </div>
        </div>
    </div>
</section>


@include('auth.footer_public')
@stop


@extends('auth.master_public', ['title'=>'Création de compte'])
@section('section')

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Créer votre compte de gestion</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('ebandeli')}}">Accueil</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="appointment pricing-table section">
    <div class="container">
        <div class="inner">
        <div class="row">

            <div class="col-lg-1 ">
            </div>
                <div class="col-lg-5 ">
                <div class="appointment-image">
                    <img class="mt-5" src="{{asset('/img/2.png')}}" alt="#">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <div class="contact-us-form">
                    <h2>Créer un compte</h2>
                    <p>pour gérer votre école.</p>
                <form class="form" action="{{route('register')}}"
                                method="POST" class="mb-3">
                                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="ecole" type="text" placeholder="Nom de l'école">
                                @error('ecole')<span class="text-left text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Nom d'administrateur">
                                @error('name')<span class="text-left text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <input name="telephone" type="text" placeholder="Téléphone">
                                @error('telephone')<span class="text-left text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Mot de passe">
                                @error('password')<span class="text-left text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="password_confirmation" type="password" placeholder="Confirme mot de passe">
                                @error('password_confirmation')<span class="text-left text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <div class="">
                                    <select name="province" class="form-control "
                                    title="Select Card Type">
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kenge">Kinshasa</option>
                                    <option value="Matadi">Matadi</option>
                                    <option value="Lubumbashi">Lubumbashi</option>
                                    <option value="Mbandaka">Maniema</option>
                                    <option value="Kisantu">Kisantu</option>
                                    <option value="Luwozi">Luwozi</option>
                                    <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                    <option value="Kolwezi">Kolwezi</option>
                                    <option value="Goma">Goma</option>
                                    <option value="Mbuji-mayi">Mbuji-mayi</option>
                                    <option value="Inongo">Kenge</option>
                                    <option value="Kikwit">Kikwiti</option>
                                    <option value="Nord-Kivu">Nord-Kivu</option>
                                    <option value="Sud-Kivu">Sud-Kivu</option>
                                    <option value="Boma">Boma</option>
                                    <option value="Popo">Popo</option>
                                    <option value="Muanda">Muanda</option>
                                </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Confirmer</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p><a href="{{route('login')}}">Se connecter</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-1 ">
        </div>
    </div>
    </div>
</section>
@include('auth.footer_public')
@stop

