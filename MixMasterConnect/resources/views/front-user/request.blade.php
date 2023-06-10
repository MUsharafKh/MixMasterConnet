@extends('front-user.layouts.master')
@section('additional-css')
    <style>
        /* ------------ Like Button ------------ */

        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

        .heart-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .content {
            padding: 13px 16px;
            display: flex;
            /* border: 2px solid #eae2e1; */
            border-radius: 5px;
            cursor: pointer;
        }

        @media only screen and (max-width: 767px) {
            .schedule .event-container .cal-time.events .timing .event-time.active {
                margin-right: 56px;
                margin-top: 2px;
            }
        }

        .schedule .cal-time.events .timing .event-time.active {
            margin-top: 15px;
        }

        .heart {
            position: absolute;
            background: url("../assets/images/icon/react-heart.png") no-repeat;
            background-position: left;
            background-size: 2900%;
            height: 90px;
            width: 125px;
            top: 50%;
            left: 21%;
            transform: translate(-50%, -50%);
        }

        .heart-text {
            font-size: 21px;
            margin-left: 30px;
            color: grey;
            font-family: 'Montserrat', sans-serif;
        }

        .numb:before {
            content: '12';
            font-size: 21px;
            margin-left: 32px;
            font-weight: 600;
            color: #9C9496;
            font-family: sans-serif;
        }

        .numb.heart-active:before {
            content: '13';
            color: #e2264d;
        }

        .heart-text.heart-active {
            color: #e2264d;
        }

        .heart.heart-active {
            animation: animate .8s steps(28) 1;
            background-position: right;
        }

        .schedule .cal-time.events .timing .event-time.active {
            background-color: #00000000;
        }

        @keyframes animate {
            0% {
                background-position: left;
            }

            100% {
                background-position: right;
            }
        }

        /* ------------------------------------- */

        @media only screen and (max-width: 575px) {
            .testimonial.music {
                padding-top: 78px !important;
            }
        }

        .testimonial.music {
            padding-top: 156px;
        }

        .music-pad {
            background-color: rgba(240, 248, 255, 0.103) !important;
            padding: 16px 40px 24px 24px !important;
            height: 92px !important;
        }

        .song-header {
            margin-left: 12px !important;
            margin-top: 7px !important;
        }

        .song-sub-header {
            margin-left: 12px !important;
            margin-top: 12px !important;
            color: rgba(255, 255, 255, 0.35) !important;
        }

        .time-bg {
            background-color: #0e0e0e !important;
        }

        .time-text {
            color: rgba(255, 255, 255, 0.3) !important;
        }

        .box-num {
            font-size: 38px !important;
            opacity: 0.4 !important;
            line-height: 28px !important;
        }

        .desc-top-margin {
            margin-top: -64px !important;
        }

        .schedule .scrollbar::-webkit-scrollbar {
            background-color: #00000000;
        }

        .schedule .scrollbar::-webkit-scrollbar-track {
            background-color: #00000000;
        }

        @media only screen and (max-width: 767px) {
            .schedule {
                .event-container {
                    .cal-time.events {
                        .timing {
                            margin-top: -80px;
                            margin-right: -76px;
                        }
                    }
                }
            }
        }
    </style>
@endsection
@section('content')
    <!-- testimonial section start-->
    <section class="music testimonial sponsor bg-shadow-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title4">
                        <div class="text-center">
                            <div class="portfolio_section">
                                <div>
                                    <h1 class="about-breadcrumb-text"> Playlist <span
                                            class="bold-text color-animated about-hero box-num">PUB-002
                                        </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="sub-title">
                            <p>Request a song</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                    <div class="subscribe">
                        <div class="center-content">
                            <div class="form-group">
                                <div class="flex">
                                    <input class="form-control text-capitalize" name="song" placeholder="Song name"
                                        type="email">
                                    <div class="button-primary">
                                        <button class=" btn btn-default btn-gradient text-white" type="submit">search
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
    <!-- testimonial section end-->

    <!--schedule section start-->
    <section class="event schedule set-relative desc-top-margin" id="schedule">
        {{-- <div class="circle">
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="title title3">
                        <div class="main-title">
                            <h2><span>Selected</span> songs</h2>
                        </div>
                        <div class="sub-title">
                            <P>The following list displays all the songs requested by other users. You are welcome to
                                suggest new songs that have not been requested yet, or express
                                your preference by either <span>up-voting</span> or <span>down-voting</span> the existing
                                selections.</P>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cal-time time-bg">
                        <div class="time">
                            <h4 class="text-capitalize monday-text">Closes in: <span class="time-text">21 H 56 Min 32
                                    Sec</span></h4>
                        </div>
                    </div>
                    <div class="event-container scrollbar">
                        <div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cal-time events music-pad">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="schedule-event">
                                            <div class="song-text-container h-100">
                                                <div class="d-flex h-100">
                                                    <div class="center-img">
                                                        <img alt="" class="img-fluid-pl"
                                                            src="../assets/images/music/icons/girl.png">
                                                    </div>
                                                    <div class="song-text">
                                                        <h5 class="text-white song-head song-header">Can't Hold Us Feat.
                                                            Ray Dalton</h5>
                                                        <h6 class="song-sub-head song-sub-header">
                                                            Macklemore & Ryan
                                                            Lewis</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="timing">
                                            <h5 class="active event-time center-content">
                                                <div class="heart-btn">
                                                    <div class="content">
                                                        <span class="heart"></span>
                                                        <span class="numb"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="border-container">
                                            </div>
                                            {{-- <h5 class="active event-time center-content">01:00</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--schedule section end-->
@endsection

@section('additional-js')
    <script>
        $(document).ready(function() {
            $('.content').click(function() {
                $('.content').toggleClass("heart-active")
                $('.heart-text').toggleClass("heart-active")
                $('.numb').toggleClass("heart-active")
                $('.heart').toggleClass("heart-active")
            });
        });
    </script>
@endsection
