<!-- footer section start-->
<footer class="music bg-footer bg-shadow-top-bottom">
    <div class="container">
        {{-- <div class="row">
            <div class="col-sm-4">
                <div class="contact-details text-center">
                    <h4 class="contact-heading gradient-text">SHOW ADDRESS</h4>
                    <h6 class="contact-sub-text">Exllasa Mall,</h6>
                    <h6 class="contact-sub-text">City mall, marid.</h6>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-details text-center">
                    <h4 class="contact-heading gradient-text">CONTACT US</h4>
                    <h6 class="contact-sub-text">+09 56895689</h6>
                    <h6 class="contact-sub-text">+09 56895690</h6>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-details text-center">
                    <h4 class="contact-heading gradient-text">DROP YOUR MAIL</h4>
                    <h6 class="contact-sub-text">demo1@gmail.com</h6>
                    <h6 class="contact-sub-text">demo123@gmail.com</h6>
                </div>
            </div>
        </div> --}}
        {{-- <div class="form form-footer p-t-50">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <input placeholder="your name" type="text">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <input placeholder="your email" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="your message" rows="6"></textarea>
                    </div>
                </div>
                <div class="booking">
                    <a class="btn btn-default btn-gradient m-0-auto">send</a>
                </div>
            </div>
        </div> --}}
    </div>
</footer>
<!-- footer section end-->

<!-- copyright section start-->
<div class="music copyright copyright-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="link-horizontal">
                    <ul>
                        <li>
                            <a class="copyright-text op-text" href="#">home</a>
                        </li>
                        <li>
                            <a class="copyright-text op-text" href="#">timeline</a>
                        </li>
                        <li>
                            <a class="copyright-text op-text" href="#">artist</a>
                        </li>
                        <li>
                            <a class="copyright-text op-text" href="#">sponsors </a>
                        </li>
                        <li>
                            <a class="copyright-text op-text" href="#">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="text-center">
                    <div class="link-horizontal">
                        <ul class="justify-content-center">
                            <li>
                                <a class="copyright-text op-text" href="#">
                                    <i aria-hidden="true" class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="copyright-text op-text" href="#">
                                    <i aria-hidden="true" class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="copyright-text op-text" href="#">
                                    <i aria-hidden="true" class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a class="copyright-text op-text" href="#">
                                    <i aria-hidden="true" class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="m-l-auto center-para">
                    <p class="copyright-text text-white text-end op-text">© 2021 </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright section end-->

<!-- Tap on Top-->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- Tap on Ends-->

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
<!--owl js-->
<script src="../assets/js/owl.carousel.min.js"></script>
<!--owl js-->
<script src="../assets/js/aos.js"></script>
<!-- tilt JS -->
<script src="../assets/js/vanilla-tilt.min.js"></script>
<!-- script js-->
<script src="../assets/js/main.js"></script>
{{-- <script src="../assets/js/popup.js"></script> --}}
<script src="../assets/js/video-popup.js"></script>

<script src="../assets/js/script4.js"></script>
<!--music player js-->
<script src="../assets/js/musicplayer/jquery.jplayer.min.js"></script>
<script src="../assets/js/musicplayer/jplayer.playlist.min.js"></script>
<script src="../assets/js/layout-fix.js"></script>


<script>



    function sidesection() {
        var sides = document.getElementById('side-section');
        if (sides.style.display === 'none') {
            sides.style.display = "block";
        } else {
            sides.style.display = "none";
        }
    }

    $(document).ready(function() {

        new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [{
                title: "Cro Magnon Man",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
            },
            {
                title: "Your Face",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
            },
            {
                title: "Cyber Sonnet",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
            },
            {
                title: "Cro Magnon Man",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
            },
            {
                title: "Your Face",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
            },
            {
                title: "Cyber Sonnet",
                mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
            },
            {
                title: "Tempered Song",
                mp3: "http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
                oga: "http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
            }
        ], {
            swfPath: "../../dist/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        });
    });
</script>

</body>

</html>
