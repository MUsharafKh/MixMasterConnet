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

<!-- artist section Start-->
<section class="music artist bg-artist bg-shadow-top-bottom" id="artist">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-10 offset-md-1">
                <div class="title title4">
                    <div class="main-title">
                        <h2>Events</h2>
                    </div>
                    <div class="sub-title">
                        <p>Latest Events</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta eos culpa nihil, asperiores molestias earum deserunt enim hic tenetur tempore explicabo sunt voluptates voluptas corrupti magnam suscipit voluptatum corporis?</p>
                    </div>
                </div>
            </div>

            <!-- event ist 1-->
            {{-- <div class="col-12">
                <div class="owl-carousel owl-theme artist-slider">
                    <div class="item">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs bottom-0 w-100 text-start set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">decorner</h5>
                                        <h6 class="musician">musician</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/2.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs bottom-0 w-100 text-start set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">decorner</h5>
                                        <h6 class="musician">musician</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd2.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/3.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs bottom-0 w-100 text-start set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">decorner</h5>
                                        <h6 class="musician">musician</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd3.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artist-text text-center">
                <p class="text-white text-para">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a
                    type specimen book.
                </p>
                <h4 class="text-uppercase dummy-text">“ dummy text of the ”</h4>
            </div> --}}

            <!-- event list 2-->
            <div class="row mt-5">
                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>
                </div>

                {{--  --}}

                <div class=" res-evnt format" id="popup-modal">
                    <div class="container  evnt-bg">
                        <div class="row ">
                            <div class="col-md-6 image">
                                    {{-- <img alt="" class="img-fluid set-relative overlay-img"  src="../assets/images/music/gallery/1.jpg"> --}}
                            </div>

                            <div class="col-md-6">
                                <div class="evnt">
                                    <div class="evnt-name">
                                        <h3 >electric vibes</h3>
                                    </div>
                                    <div class="evnt-tagline">
                                        <h6 ><span>cyber party night</span></h6>
                                    </div>
                                    <div class="evnt-dis">
                                        <p class="">
                                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                                            has
                                            been the industry's standard dummy text ever since the 1500s.
                                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                                            has
                                            been the industry's standard dummy text ever since the 1500s.
                                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                                            has
                                            been the industry's standard dummy text ever since the 1500s.

                                        </p>
                                    </div>
                                    <div class="evnt-performerce">
                                        <h6>Special Performence</h6>
                                        <ul>
                                            <li>Artist name</li>
                                            <li>Artist name</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6>Ticket Price</h6>
                                    </div>
                                    <div class="price">
                                        <p>$ 30</p>
                                    </div>
                                    <div class="date">
                                        <h5>Saturday, march 12</h6>
                                        <h4>9 AM - 2 PM</h4>
                                    </div>
                                    <a class="btn btn-default primary-btn info back-white" href="#">Go To Box</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  --}}


                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sm-evnt">
                    <div class="item" data-name="p-1">
                        <div class="album-artist text-center">
                            <img alt="" class="img-fluid set-relative overlay-img"
                                src="../assets/images/music/artist/1.png">
                            <div>
                                <div class="overlay-box2"></div>
                            </div>
                            <div class="set-abs singers-div w-100 text-center set-z-index">
                                <div class="singers">
                                    <div class="m-b-10">
                                        <h5 class="name">Event Name</h5>
                                        <h6>Tagline</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="set-abs cds disk">
                                <img alt="" class="cd-animation" src="../assets/images/music/artist/cd1.png">
                                <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>
</section>





<!-- Popup-->
{{-- <div class="products-preview">
    <div class="preview" data-target="p-1">
        <i class="fa fa-times" aria-hidden="true"></i>
        <div class="item">
            <div class="album-artist text-center">
                <img alt="" class="img-fluid set-relative overlay-img"
                    src="../assets/images/music/artist/3.png">
                <div>
                    <div class="overlay-box2"></div>
                </div>
                <div class="set-abs bottom-0 w-100 text-start set-z-index">
                    <div class="singers">
                        <div class="m-b-10">
                            <h5 class="name">decorner</h5>
                            <h6 class="musician">musician</h6>
                        </div>
                    </div>
                </div>
                <div class="set-abs cds disk">
                    <img alt="" class="cd-animation" src="../assets/images/music/artist/cd3.png">
                    <img alt="" class="elipse" src="../assets/images/music/artist/Ellipse.png">
                </div>
            </div>
        </div>
    </div>

    <div class="preview" data-target="p-2">
        <i class="fa fa-times" aria-hidden="true"></i>
        <div class="item">
            <div class="img-container">
                <img alt="" class="img-fluid" src="../assets/images/event/blog/1.jpg">
                <div class="overlay"></div>
                <div class="blog-info set-abs bottom-0">
                    <div class="center-text flex m-b-25">
                        <i aria-hidden="true" class="fa fa-user-o m-r-5"></i>
                        <h6 class="m-r-25 font-blog">admin</h6>
                        <i aria-hidden="true" class="fa fa-calendar-o m-r-5 "></i>
                        <h6 class="font-blog">5 September 2019</h6>
                    </div>
                    <h4 class="blog-text">Find Great Speaker For Event.</h4>
                    <p class="borders-before"><span>Detais This Event</span></p>
                    <p class="small-font">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard .</p>
                    <div class="social-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="center-content">
                                        <i aria-hidden="true" class="fa fa-facebook center-content"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="center-content">
                                        <i aria-hidden="true" class="fa fa-twitter center-content"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="center-content">
                                        <i aria-hidden="true" class="fa fa-google center-content"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="preview" data-target="p-3">
        <i class="fa fa-times" aria-hidden="true"></i>
        <section class="resume portfolio-section zoom-gallery item">
            <div class="container">
                <div class="row">
                    <div class="col-12 filter-section">
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".fashion" href="#">Fashion</a></li>
                                <li><a data-filter=".bags" href="#">Bags</a></li>
                                <li><a data-filter=".shoes" href="#">Shoes</a></li>
                                <li><a data-filter=".watch" href="#">Watch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="isotopeContainer row">
                    <div class="col-lg-3 col-sm-6 isotopeSelector shoes fashion bags">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" data-source="http://500px.com/photo/32736307"
                                   href="../assets/images/resume/work/1.jpg" title="Into The Blue">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-plus"></i>
                                    </div>
                                    <img alt="" class="img-fluid blur-up lazyload "
                                         src="../assets/images/resume/work/1.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>> --}}

<!-- gallery section start -->
<section class="resume portfolio-section zoom-gallery">
    <div class="container">
        <div class="row">
            <div class="col-12 filter-section">
                <div class="filter-container isotopeFilters">
                    <ul class="list-inline filter">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".fashion" href="#">Fashion</a></li>
                        <li><a data-filter=".bags" href="#">Bags</a></li>
                        <li><a data-filter=".shoes" href="#">Shoes</a></li>
                        <li><a data-filter=".watch" href="#">Watch</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="isotopeContainer row">
            <div class="col-lg-4 col-sm-6 isotopeSelector shoes fashion bags">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 isotopeSelector shoes fashion bags">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 isotopeSelector shoes fashion ">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 isotopeSelector shoes  bags">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 isotopeSelector  fashion bags">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 isotopeSelector shoes fashion ">
                <div class="overlay">
                    <div class="border-portfolio">
                        <a class="zoom_gallery" data-source="http://500px.com/photo/32736307">
                            <div class="overlay-background">
                                <i aria-hidden="true" class="fa fa-plus"></i>
                            </div>
                                <div class="item">
                                    <div class="album-artist text-center">
                                        <img alt="" class="img-fluid set-relative overlay-img"
                                            src="../assets/images/music/artist/1.png">
                                        <div>
                                            <div class="overlay-box2"></div>
                                        </div>
                                        <div class="set-abs bottom-0 w-100 text-center set-z-index">
                                            <div class="singers">
                                                <div class="m-b-10">
                                                    <h5 class="name">Event name</h5>
                                                    <h6 class="musician">Tagline</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- gallery section end -->


<!-- Login-modal section start -->
<div class="login-modal">
    <div aria-hidden="true" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3 class="m-b-20">modal description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.</p>
                    <a aria-label="Close" class="btn btn-default primary-btn m-t-20" data-bs-dismiss="modal">close
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login-modal section end -->

<!-- popup start -->
<div class="gym format" id="popup-modal">
    <div class="container  evnt-bg">
        <div class="row ">
            <div class="col-md-6 image">
                    {{-- <img alt="" class="img-fluid set-relative overlay-img"  src="../assets/images/music/gallery/1.jpg"> --}}
            </div>

            <div class="col-md-6">
                <div class="evnt">
                    <div class="evnt-name">
                        <h3 >electric vibes</h3>
                    </div>
                    <div class="evnt-tagline">
                        <h6 ><span>cyber party night</span></h6>
                    </div>
                    <div class="evnt-dis">
                        <p class="">
                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s.
                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s.
                            Lorem Ipsum is simply dummy text of the printing andv typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s.

                        </p>
                    </div>
                    <div class="evnt-performerce">
                        <h6>Special Performence</h6>
                        <ul>
                            <li>Artist name</li>
                            <li>Artist name</li>
                        </ul>
                    </div>
                    <div>
                        <h6>Ticket Price</h6>
                    </div>
                    <div class="price">
                        <p>$ 30</p>
                    </div>
                    <div class="date">
                        <h5>Saturday, march 12</h6>
                        <h4>9 AM - 2 PM</h4>
                    </div>
                    <a class="btn btn-default primary-btn info back-white" href="#">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popup end -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!-- popper js-->
<script src="../assets/js/popper.min.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js"></script>
<!--  costamizer option -->
<script src="../assets/js/custamizer-option.js"></script>
<!--magnific popup js-->
<script src="../assets/js/magnific-popup.js"></script>
<script src="../assets/js/isotope.min.js"></script>
<script src="../assets/js/portfolio.js"></script>
<!-- script js-->
<script src="../assets/js/main.js"></script>
<script src="../assets/js/zoom-gallery.js"></script>

@endsection
