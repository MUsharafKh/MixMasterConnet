@extends('front-user.layouts.master')

@section('content')
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
