<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.6, #-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="mobi/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="mobi/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="mobi/tether/tether.min.css">
  <link rel="stylesheet" href="mobi/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="mobi/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="mobi/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="mobi/socicon/css/styles.css">
  <link rel="stylesheet" href="mobi/dropdown/css/style.css">
  <link rel="stylesheet" href="mobi/theme/css/style.css">
  <link rel="stylesheet" href="mobi/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
    <section class="menu cid-qTeSEWhLlK" once="menu" id="menu1-4">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="{{url('/')}}">
                         <img src="mobi/images/logo2.png" alt="PLO" style="height: 3.8rem;">
                     </a>
                 </span>
                 <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="https://mobirise.com">
                        PLO'7
                    </a>
                    <form class="form-horizontal" role="form" method="get" action="{{ url('search/pelanggan') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="query" placeholder="Cari Nama Pelanggan" id="cari" required>
                        <input type="hidden" name="search" value="1">
                    </form>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                <a class="nav-link link text-white display-4" href="https://mobirise.com">
                    <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link link text-white display-4" href="https://mobirise.com">
                    <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    About Us
                </a>
            </li></ul>
            <div class="navbar-buttons mbr-section-btn">
                @if(Auth::user() && Auth::check())
                <a class="btn btn-sm btn-primary display-4" href="{{url('auth/logout')}}">
                    Logout<span class="mbri-logout mbr-iconfont mbr-iconfont-btn "></span>
                    @else
                    <a class="btn btn-sm btn-primary display-4" href="{{url('login')}}">
                        Login
                        <span class="mbri-login mbr-iconfont mbr-iconfont-btn "></span>
                        @endif
                    </a>
                </div>
            </div>
        </nav>
    </section>
    <section class="carousel slide cid-qTeRZx47al" data-interval="false" id="slider1-1">
        <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(mobi/images/1.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="mobi/images/1.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">PLO'7</h2><p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p><div class="mbr-section-btn" buttons="0">
            @if(Auth::user() && Auth::check())
            <a class="btn  btn-white-outline display-4" href="{{url('register')}}">Logout</a>
            @else
            <a class="btn  btn-white-outline display-4" href="{{url('login')}}">Login</a>
            @endif
        </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="https://www.youtube.com/watch?v=fwkKc6M60-0"><div class="mbr-overlay"></div><div class="container container-slide"><div class="image_wrapper"><img src="mobi/images/2.jpg" style="opacity: 0;"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1">VIDEO SLIDE</h2><p class="lead mbr-text mbr-fonts-style display-5">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(mobi/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="mobi/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"><h2 class="mbr-fonts-style display-1">IMAGE SLIDE</h2><p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-info display-4" href="#>FOR WINDOWS</a> <a class="btn  btn-white-outline display-4" href="#>FOR MAC</a></div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>
    </section>
    <section class="features18 popup-btn-cards cid-qTeU53q9MP" id="features18-b">
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Image features with buttons on mouseover
            </h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
                In browser you will see buttons when hover on cards
            </h3>
            <div class="media-container-row pt-5 ">
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper ">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center">
                                <a href="# class="btn btn-primary display-4">Learn More</a>
                            </div>
                            <img src="mobi/images/01.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                No Coding
                            </h4>
                            <p class="mbr-text mbr-fonts-style align-left display-7">
                                Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center">
                                <a href="# class="btn btn-primary display-4">Learn More</a>
                            </div>
                            <img src="mobi/images/02.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Mobile Friendly
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                               All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                           </p>
                       </div>
                   </div>
               </div>

               <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="# class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="mobi/images/03.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Unique Styles
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                        </p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
@if(Auth::user() && Auth::check())
<section class="mbr-section form1 cid-qTeTxmRQ8u" id="form1-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Easily add subscribe and contact forms without any server-side integration.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">


                <form class="mbr-form" method="POST" action="{{url('saran/save')}}">
                    <div class="row row-sm-offset">
                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="email-form1-6">Email</label>
                                <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-6" placeholder="Your E-Mail">
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-6">Phone</label>
                                <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-6" placeholder="Your Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7" for="message-form1-6">Message</label>
                        <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-6" required placeholder="Your Message"></textarea>
                    </div>

                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</section>
@endif
<section class="footer4 cid-qTeTOuQRZk" id="footer4-9">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="#">
                        <img src="mobi/images/logo2.png" alt="Mobirise">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7">
                    PLO'7
                </p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="#" class="text-white">About Us</a>
                    <br><a href="#" class="text-white">Services</a>
                    <br><a href="#" class="text-white">Selected Work</a>
                    <br><a href="#" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    RECENT NEWS
                </p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">
                    Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration.
                    <br>
                    <br>Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.
                </p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="mbr-text mbr-fonts-style form-text display-7">
                    Get monthly updates and free resources.
                </p>
                <div class="media-container-column" data-form-type="formoid">


                    <form class="form-inline" action="#" method="post">

                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-9">
                        </div>
                        <div class="input-group-btn m-2">
                            <button href="" class="btn btn-primary display-4" type="submit" role="button">Subscribe</button>
                        </div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                    <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 PLO'7 - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="mobi/web/assets/jquery/jquery.min.js"></script>
<script src="mobi/popper/popper.min.js"></script>
<script src="mobi/tether/tether.min.js"></script>
<script src="mobi/bootstrap/js/bootstrap.min.js"></script>
<script src="mobi/smoothscroll/smooth-scroll.js"></script>
<script src="mobi/parallax/jarallax.min.js"></script>
<script src="mobi/sociallikes/social-likes.js"></script>
<script src="mobi/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="mobi/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="mobi/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="mobi/dropdown/js/script.min.js"></script>
<script src="mobi/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="mobi/mbr-popup-btns/mbr-popup-btns.js"></script>
<script src="mobi/theme/js/script.js"></script>
<script src="mobi/slidervideo/script.js"></script>


</body>
</html>