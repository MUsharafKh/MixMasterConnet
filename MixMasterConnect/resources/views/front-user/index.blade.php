@extends('front-user.layouts.master')

@section('content')
    <!-- header Start-->
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
                                                <h1><span class="bold-text">request your</span> favourite songs</h1>
                                            </div>
                                            <div class="header-sub-text">
                                                <p class="text-white p-light blur-square">
                                                    Feel free to request any songs you desire! If you're a guest looking to
                                                    request a song, simply click on the "I'm a guest" button. If you're an
                                                    artist or interested in organizing an event, click on the "I'm an
                                                    artist" button.
                                                </p>
                                            </div>
                                            <div class="link-horizontal pad-header login-popup">


                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 offset-md-3">
                                                                        <div class="text-center">

                                                                            <a class="popup-with-form btn btn-default primary-btn" data-bs-target="#login-modal"
                                                                               data-bs-toggle="modal">I'm Artist
                                                                            </a>
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
                            <h6 class="watch">Learn more about us<i aria-hidden="true" class="fa fa-arrow-down m-l-15"></i>
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </section>

    {{-- <div class="music side-section" id="side-section">
        <div class="jp-jplayer" id="jquery_jplayer_1_1"></div>
        <div aria-label="media player" class="jp-audio" id="jp_container_1_1" role="application">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <div class="side-player">
                        <div class="text-center">
                            <div class="gradient-block">
                                <div class="animation-circle-inverse">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <h6 class="now-play">now playing</h6>
                            </div>
                            <img alt="" class="img-fluid girls" src="../assets/images/music/icons/girl-side.jpg">
                            <div class="author-text">
                                <h5 class="song-text">Latest Song</h5>
                                <h6 class="song-sub-text">Zrial doj</h6>
                            </div>
                        </div>
                        <div class="container">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-time-holder">
                                <div aria-label="time" class="jp-current-time" role="timer">&nbsp;</div>
                                <div aria-label="duration" class="jp-duration" role="timer">&nbsp;</div>
                            </div>
                            <div class="jp-controls">
                                <div class="button-container">
                                    <button class="jp-previous" role="button" tabindex="0"></button>
                                    <button class="jp-play" role="button" tabindex="0"></button>
                                    <button class="jp-next" role="button" tabindex="0"></button>
                                </div>
                                <button class="btn-sidebar" onclick="sidesection()">
                                    <i aria-hidden="true" class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="jp-playlist">
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp-no-solution">
                            <span>Update Required</span>
                            To play the media you will need to either update your browser to a recent version or update your
                            <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- header end-->

    <!-- About us section Start-->
    <section class="music bg-video format bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img alt="" class="img-fluid" src="../assets/images/music/singer.png">
                </div>
                <div class="col-md-6">
                    <div class=" center-text">
                        <div>
                            <div class="format-small-text">
                                <h6 class="gradient-text hash-video">#about us</h6>
                            </div>
                            <div class="format-head-text">
                                <h3 class="about-font-header">What is MMConnect</h3>
                            </div>
                            <div class="format-sub-text">
                                <div class="sub-heading">
                                    <h6 class="sub-small-text">All in one platform that connects artists and fans</h6>
                                </div>
                                <p class="text-white sub-para">
                                    Are you tired of attending events where the music doesn't match your taste? Look no
                                    further! MMConnect is here to revolutionize the way artists and fans connect and plan
                                    their music events.
                                </p><br>
                                <p class="text-white sub-para">
                                    Our platform serves as a bridge between artists and fans, ensuring
                                    that every event is a memorable and enjoyable experience for everyone involved. With
                                    MMConnect, artists can create personalized music boxes, inviting their fans to submit
                                    song requests. As a guest, you have the power to curate the ultimate playlist by adding
                                    new songs and voting on the ones you love.
                                </p><br>
                                <p class="text-white sub-para">
                                    Imagine a world where you can finally have a
                                    say in the music played at events! No more settling for generic playlists that don't
                                    resonate with your preferences. MMConnect empowers you to shape the atmosphere and enjoy
                                    the songs you desire the most.
                                </p>
                            </div>
                            {{-- <div class="m-b-40">
                                <div class="link-horizontal">
                                    <ul>
                                        <li>
                                            <a class="button icon-btn d-flex" href="#">
                                                <i aria-hidden="true" class="fa fa-play video-icon center-content m-0"></i>
                                                <div class="watch-now center-content">
                                                    <h6 class="watch">Watch Now</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="d-flex">
                                <a href="#">
                                    <h6 class="watch">Join us NOW<i aria-hidden="true"
                                            class="fa fa-arrow-right m-l-15"></i></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end-->

    <!-- album section Start-->
    <section class="music album">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>album list</h2>
                        </div>
                        <div class="sub-title">
                            <p>Our Latest Album and details Song 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-none d-md-block d-lg-none">
                    <div class="album-list overlay-box text-center">
                        <h5 class="text-uppercase list-head">decorner</h5>
                        <div>
                            <h6 class="item-sublist">20 December</h6>
                            <h6 class="item-sublist">Sunday</h6>
                            <h6 class="item-sublist">23:00-0:00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- album section end-->

    <!-- artist section Start-->
    <section class="music artist bg-artist bg-shadow-top-bottom" id="artist">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>artists</h2>
                        </div>
                        <div class="sub-title">
                            <p>Our artists 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
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
                                        <div class="rate">
                                            <div>
                                                <div class="progress">
                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                                        class="progress-bar" role="progressbar" style="width:70%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <div class="rate">
                                            <div>
                                                <div class="progress">
                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                                        class="progress-bar" role="progressbar" style="width:70%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <div class="rate">
                                            <div>
                                                <div class="progress">
                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                                        class="progress-bar" role="progressbar" style="width:70%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
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
                    <div class="artist-text text-center">
                        <p class="text-white text-para">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a
                            type specimen book.
                        </p>
                        <h4 class="text-uppercase dummy-text">“ dummy text of the ”</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- artist section end-->

    <!-- sponsor section Start-->
    <section class="music sponsor bg-unset" id="sponsor">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2 class="text-uppercase">sponsors</h2>
                        </div>
                        <div class="sub-title">
                            <p>Our new sponsors 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/1.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/2.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/3.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/4.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/5.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/6.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/7.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/8.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/9.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/10.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/11.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sponsor-img">
                        <div class="text-center">
                            <div class="overlay-box">
                                <img alt="" class="img-fluid" src="../assets/images/music/sponser/12.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sponsor section end-->

    <!-- gallery section Start-->
    <section class="music gallery bg-gallery bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>gallery</h2>
                        </div>
                        <div class="sub-title">
                            <p>Latest Photo Our Music Event</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme gallery-slider" id="gallery-slider">
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/1.jpg">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/2.jpg">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/3.png">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/4.jpg">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/5.jpg">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="item">
                            <img alt="" src="../assets/images/music/gallery/5.jpg">
                            <div class="abs-center w-100 text-container">
                                <h5 class="text-white overlay-text text-center">Special Music Event<span>2019</span></h5>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery section end-->

    <!-- video section Start-->
    <section class="music bg-video format bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img alt="" class="img-fluid" src="../assets/images/music/singer.png">
                </div>
                <div class="col-md-6">
                    <div class=" center-text">
                        <div>
                            <div class="format-small-text">
                                <h6 class="gradient-text hash-video">#video</h6>
                            </div>
                            <div class="format-head-text">
                                <h3 class="about-font-header">Anet Licker</h3>
                            </div>
                            <div class="format-sub-text">
                                <div class="sub-heading">
                                    <h6 class="sub-small-text">Performs in Slide Spring Tour</h6>
                                </div>
                                <p class="text-white sub-para">
                                    The page builder elements that we’ve created for you, make the website building process
                                    easy and fun.
                                </p>
                            </div>
                            <div class="m-b-40">
                                <div class="link-horizontal">
                                    <ul>
                                        <li>
                                            <a class="button icon-btn d-flex" href="#">
                                                <i aria-hidden="true"
                                                    class="fa fa-play video-icon center-content m-0"></i>
                                                <div class="watch-now center-content">
                                                    <h6 class="watch">Watch Now</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="#">
                                    <h6 class="watch">see all video<i aria-hidden="true"
                                            class="fa fa-arrow-right m-l-15"></i></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section end-->

    <!-- booking section Start-->
    <section class="music booking">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>event booking</h2>
                        </div>
                        <div class="sub-title">
                            <p>we are wait for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <div class="title title3">
                        <div class="sub-title">
                            <p class="text-white">Register now and reserve your seat for this <span>year's Unice,</span>
                                the largest
                                <span>web development</span> and online marketing <span>conference in UK,</span>covering
                                everything you need
                                to know in order to develop a successful online business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form class="row g-3 align-items-center m-b-50 row">
                    <div class="col">
                        <div class="form-group">
                            <input placeholder="FIRST NAME" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input placeholder="LAST NAME" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input placeholder="EMAIL" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input placeholder="MOBILE" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input placeholder="COMPANY NAME" type="text">
                        </div>
                    </div>
                </form>

                <div class="text-center">
                    <a class="btn btn-default btn-gradient m-0-auto">register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- booking section end-->

    <!-- blog section start-->
    <section class="music blog bg-album bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>blog</h2>
                        </div>
                        <div class="sub-title">
                            <p>our new activities</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="blog-slider">
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
                        <div class="item">
                            <div class="img-container">
                                <img alt="" class="img-fluid" src="../assets/images/event/blog/2.jpg">
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
                        <div class="item">
                            <div class="img-container">
                                <img alt="" class="img-fluid" src="../assets/images/event/blog/3.jpg">
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
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->

    <!-- subscribe section start-->
    <section class="music subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>subscribe</h2>
                        </div>
                        <div class="sub-title">
                            <p>we are wait for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                    <div class="subscribe-title">
                        <h6 class="subscribe-main">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been</h6>
                    </div>
                    <div class="subscribe">
                        <div class="center-content">
                            <div class="form-group">
                                <div class="flex">
                                    <input class="form-control text-capitalize" name="email"
                                        placeholder="Please Enter Your Email Address" type="email">
                                    <div class="button-primary">
                                        <button class=" btn btn-default btn-gradient text-white" type="submit">send me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end-->

    <!-- testimonial section start-->
    <section class="music testimonial sponsor bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="main-title">
                            <h2>testimonial</h2>
                        </div>
                        <div class="sub-title">
                            <p>Our happy client</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="owl-carousel owl-theme music-testimonial-slider" id="music-testimonial-slider">
                        <div class="item ">
                            <div>
                                <img alt="" class="img-fluid" src="../assets/images/music/testimonial/quote.png">
                                <div class="text-center testimonial-info">
                                    <p class="testimonial-para">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <h6 class="gradient-text text-uppercase m-b-5 font-large">Alan Licker</h6>
                                    <h6 class="font-small">CEO OF SC.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div>
                                <img alt="" class="img-fluid" src="../assets/images/music/testimonial/quote.png">
                                <div class="text-center testimonial-info">
                                    <p class="testimonial-para">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum
                                        has been the industry's standard dummy text ever since the 1500s,</p>
                                    <h6 class="gradient-text text-uppercase m-b-5 font-large">Alan Licker</h6>
                                    <h6 class="font-small">CEO OF SC.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end-->


<!-- Login-modal section start -->
<div class="login-modal" >
    <div aria-hidden="true" class="modal fade" id="login-modal" role="dialog" tabindex="-1" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills mb-5" id="pills-tab-login" role="tablist">
                        <li class="nav-item">
                            <a aria-controls="pills-home" aria-selected="true" class="nav-link active" data-bs-toggle="pill"
                               href="#pills-home" id="pills-home-tab" role="tab">Login</a>
                        </li>
                        <li class="nav-item">
                            <a aria-controls="pills-profile" aria-selected="false" class="nav-link" data-bs-toggle="pill"
                               href="#pills-profile" id="pills-profile-tab" role="tab">Sign up</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div aria-labelledby="pills-home-tab" class="tab-pane fade show active" id="pills-home"
                             role="tabpanel">



                             <!-- login-form -->
                            <form >
                                <div class="row g-3" >
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail">Email</label>
                                        <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword05">Password</label>
                                        <input class="form-control" id="inputPassword05" placeholder="Password"
                                               type="password">
                                    </div>
                                </div>
                                <button class="btn primary-btn btn-default text-uppercase">login</button>
                            </form>
                            <!-- end login form -->
                        </div>
                        <div aria-labelledby="pills-profile-tab" class="tab-pane fade" id="pills-profile"
                             role="tabpanel">
                            <!-- sign up form -->
                            <form>
                                <div class="row g-3">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail05">Email</label>
                                        <input class="form-control" id="inputEmail05" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword04">Password</label>
                                        <input class="form-control" id="inputPassword04" placeholder="Password"
                                               type="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Confirm Password</label>
                                        <input class="form-control" id="inputPassword4" placeholder="Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input class="form-control" id="inputAddress" placeholder="1234 Main St"
                                           type="text">
                                </div>
<div class="google" >
                                <button type="button" class="login-with-google-btn" >
                                    Sign in with Google
                                  </button>

                                  <button type="button" class="login-with-fb-btn" >
                                    Sign in with Facebook
                                  </button>
</div>
                                <button class="btn btn-default primary-btn text-uppercase">sign up</button>
                            </form>
                            <!-- end sign up form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login-modal section end -->


@endsection
