@extends('front-user.layouts.master')

@section('content')

<section class="music header" id="header">
    <div class="music-content">
        <div class="music-bg bg bg-shadow-top">
            <div class="text-center w-100" data-tilt data-tilt-max="3" data-tilt-perspective="500" data-tilt-speed="400">
                <div class="img-height">
                    <img alt="" class="img-fluid" src="../assets/images/music/man.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="center-text">
                                    <div class="text-center">
                                        <div class="header-text">
                                            <h1><span class="bold-text">POPULAR</span>UPCOMMING EVENTS</h1>
                                        </div>
                                        <div class="header-sub-text">
                                            <p class="text-white p-light blur-square">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dolore cupiditate adipisci, iusto cum laboriosam porro non ex magnam architecto nesciunt asperiores impedit rem quas, sequi officiis in consequatur facere!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-side">
        <div class="circle">
            <img alt="" class="img-fluid" src="../assets/images/music/icons/aero.png">
        </div>
        <h1>2020 <span>21</span></h1>
    </div>
    <div class="left-side">
        <h6 class="follow-text">follow us</h6>

        <ul>
            <li><a href="#"><img alt="" class="img-fluid"
                        src="../assets/images/music/icons/insta.png"></a></li>
            <li><a href="#"><img alt="" class="img-fluid"
                        src="../assets/images/music/icons/twitter.png"></a></li>
            <li><a href="#"><img alt="" class="img-fluid"
                        src="../assets/images/music/icons/facebook.png"></a></li>
        </ul>
    </div>

    <a href="">
        <div class="container music-container">
            <div class="row">
                <div class="text-center">
                    <a href="">
                        <h6 class="watch">View all Events<i aria-hidden="true" class="fa fa-arrow-down m-l-15"></i>
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </a>
</section>

    <!--breadcrumb section start-->
    <section class="portfolio-metro bg p-b-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 text-center ">
                        <div class="portfolio_section">
                            <div>
                                <h1 class="about-breadcrumb-text"> MMConnect <span class="bold-text color-animated about-hero"
                                        style="font-size: 38px;
                                    opacity: 0.4;
                                    line-height: 28px;">Contact
                                        Us</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <img alt="" class="img-fluid man" src="../assets/images/music/man.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" bg-light-inner p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title title2 title-inner">
                        <div class="main-title">
                            <h2 class="font-primary borders text-center main-text text-uppercase m-b-0">
                                <span>Get in Touch</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="music bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-details text-center">
                            <h4 class="contact-heading text-white ">Show address</h4>
                            <h6 class="contact-sub-text text-white">Exllasa Mall,</h6>
                            <h6 class="contact-sub-text text-white">City mall, marid.</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-details text-center">
                            <h4 class="contact-heading text-white ">Show address</h4>
                            <h6 class="contact-sub-text text-white">Exllasa Mall,</h6>
                            <h6 class="contact-sub-text text-white">City mall, marid.</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-details text-center">
                            <h4 class="contact-heading  text-white">Show address</h4>
                            <h6 class="contact-sub-text text-white">Exllasa Mall,</h6>
                            <h6 class="contact-sub-text text-white">City mall, marid.</h6>
                        </div>
                    </div>
                </div>
                <div class="form form-footer p-t-50">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input placeholder="your name" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input placeholder="your email" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="your message" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="booking">
                            <a class="btn btn-default primary-btn m-0-auto bg-black">send</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <!--breadcrumb section end-->
@endsection
