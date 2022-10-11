<!DOCTYPE html>
<html lang="zxx">
<head>
    <link rel="icon" href="{{ asset('/') }}front/images/smslogo.png">
    <title>SMS MV</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Trim-Fit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="{{ asset('/') }}front/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="{{ asset('/') }}front/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{ asset('/') }}front/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

    @stack('customCss')
</head>
<body>
<!--headder-->
<div class="header-outs" id="home">
    <div class="header-w3layouts">
        <!--//navigation section -->
        <div class="headr-title">
            <div class="hedder-up">
                <h5 class="text-white" style="margin-left: 20%;"><span class="fa fa-phone-volume"></span> 111222333</h5>

            </div>
            <div class="header-call">
                <a href="{{ route('visitor.login') }}"><button class="btn btn-warning">Login</button></a>
                <a href="{{ route('visitor.register') }}"><button class="btn btn-primary">Sign Up Today!</button></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('/') }}front/images/smslogo.png" style="height: 40px;width: 250px"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link ">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link ">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('our-package') }}" class="nav-link">Our packages</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route('testSMS') }}" class="nav-link">Test SMS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('developer') }}" class="nav-link">Developers API</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a href="test-sms.html" class="nav-link">Test SMS</a>--}}
                    {{--</li>--}}


                    <!--<li class="nav-item dropdown">-->
                    <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--Pages-->
                    <!--</a>-->
                    <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                    <!--<a class="dropdown-item" href="developer-api.html">Blog</a>-->
                    <!--<a class="dropdown-item" href="our-package.html">Typography</a>-->
                    <!--</div>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!--//navigation section -->

    </div>
</div>
<!-- //Navigation-->
<!--//headder-->
<!-- banner -->

<!--contact -->
@yield('body')
<!--//contact  -->
<!--subscribe-->
<section class="py-lg-4 py-md-3 py-sm-3 py-3" style="background-image: url({{ asset($join->image)}});background-repeat: no-repeat;position: center">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class=" clr text-center mb-lg-4 mb-md-3 mb-sm-3 mb-2">{{ $join->title }}</h3>
        <div class="row subscribe-form text-center">

            <div class="col-md-12 email-info">
                <div class="wthree-form-list">
                    <h5 class="text-white mb-lg-4 mb-md-3 mb-sm-3 mb-2">{{ $join->des }}</h5>
                </div>
                <div class="text-center ">
                    <a href="register.html" class="btn text-white" style="background-color: #ff6600">{{ $join->btn1 }}</a>
                    <a href="our-package.html" class="btn text-white" style="background-color: #ff6600">{{ $join->btn2 }} <span class="fa fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section >
<!--//subscribe-->
<!-- //Footer -->
<section class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="row footer-agile-grids text-center">
            <div class="col-lg-4 col-md-4 col-sm-6 wthree-left-right">
                <h4><img src="{{ asset($footer->image) }}" alt="" style="height: 50px;width: 250px"></h4>
                <div class="abt-footer">
                    <p>{{ $footer->des }}</p>
                    <h5><a href="{{ route('about') }}">Read more..</a></h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 wthree-left-right">
                <h4>COMPANY INFO</h4>
                <nav class="border-line">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('pricing') }}">SMS Pricing <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">SMS Resources</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Company</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('term') }}" class="nav-link ">Terms of Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">PAIA Manual</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('support') }}" class="nav-link">Support</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 wthree-left-right">
                <h4>Nav Links</h4>
                <nav class="border-line">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service') }}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('our-package') }}" class="nav-link ">Our Packages</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('developer') }}" class="nav-link">Developer API</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 wthree-left-right">
                <h4>{{ $footer->title }}</h4>
                <nav class="border-line">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">{{ $footer->number }}</a>
                        </li>
                        <div class="bottom-social pt-3">
                        <ul>
                                @if($footer->link1)
                                <li class="pb-1">
                                    <a href="{{ $footer->link1}}">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link2)
                                <li class="pb-1">
                                    <a href="{{ $footer->link2}}">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link3)
                                <li class="pb-1">
                                    <a href="{{ $footer->link3}}">
                                        <span class="fab fa-linkedin"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link4)
                                <li class="pb-1">
                                    <a href="{{ $footer->link4}}">
                                        <span class="fab fa-youtube"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link5)
                                <li class="pb-1">
                                    <a href="{{ $footer->link5}}">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link6)
                                <li class="pb-1">
                                    <a href="{{ $footer->link6}}">
                                        <span class="fab fa-pinterest"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link7)
                                <li class="pb-1">
                                    <a href="{{ $footer->link7}}">
                                        <span class="fab fa-google-plus-g"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link8)
                                <li class="pb-1">
                                    <a href="{{ $footer->link8}}">
                                        <span class="fab fa-snapchat"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link9)
                                <li class="pb-1">
                                    <a href="{{ $footer->link9}}">
                                        <span class="fab fa-vimeo"></span>
                                    </a>
                                </li>
                                @endif
                                @if($footer->link10)
                                <li class="pb-1">
                                    <a href="{{ $footer->link10}}">
                                        <span class="fa fa-info-circle"></span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<footer style="background-color: #ff6600">
    <p>{{ $footer->copy }} <span class="fa fa-heart"></span></p>
</footer>
<!-- //Footer -->
<!--js working-->
<script src='{{ asset('/') }}front/js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- start-smoth-scrolling -->
<script src="{{ asset('/') }}front/js/move-top.js"></script>
<script src="{{ asset('/') }}front/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="{{ asset('/') }}front/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
@stack('jscript')
</body>
</html>