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
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/css/uncover.css" />
    <!--stylesheets-->
    <link href="{{ asset('/') }}front/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

</head>
<body>
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
                    <li class="nav-item ">
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


    <!--banner-->
    <div class="slides" data-slide="auto">
		
           @foreach($sliders as $slider)
		   <div class="slide one-img">
			   <div class="slider-up">
				   <h1 class="text-center text-dark">
					   {{ $slider->title }}
				   </h1>
				   <p class="text-center text-dark">
                    {{ $slider->des }}
				   </p>
				   <div class="text-center text-dark outs_more-buttn">
					   <a href="{{ route('our-package') }}" style="background-color: #ff6600">{{ $slider->btn }}</a>
				   </div>
			   </div>
			   <!-- <div class="slide__img"></div> -->
			   <div class="slide__img" style="background-image: url({{ asset($slider->image) }})"></div>
           </div>
           @endforeach
		   
		   <div class="clearfix"></div>
	   </div>
	   <div>
		   <ul class="pagination">
			   <li><span class="pagination__item"> </span></li>
			   <li><span class="pagination__item"> </span></li>
			   <li><span class="pagination__item"> </span></li>
		   </ul>
	   </div>
	   <div class="clearfix"></div>
   </div>

<!--services -->
<section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service" style="margin-top: 0px">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class="title text-center mt-5">{{ $serviceTitle->title }}</h3>
        <div class="row service-abt-info text-left">

            <div class="col-lg-12 w3layouts-service-right">
                <div class="ser-list-using-agile">
                    <h5 class="text-center mb-5 text-success">{{ $serviceTitle->des }}</h5>
                </div>
                <div class="row mt-lg-4 mt-md-3 mt-3">
                    @foreach($services as $service)
                    <div class="col-md-6 col-sm-6 ser-w3l-jst-abt mt-3">
                        <div class="ser-back-ground clo-ser-one" style="background-color: {{ $service->color }}">
                            <!-- <div style="background-color: {{ $service->color }}"> -->
                            <div class="row ">
                                <div class="col-md-4 ser-wthree-icon">
                                    <img src="{{ asset($service->image) }}" alt="" style="height: 200px;width: 180px;border-radius: 10px 10px 10px 10px">
                                </div>
                                <div class="col-md-8 ser-agile-para px-0 pt-3 pr-4 pl-3">
                                    <a href="#"><h5>{{ $service->title }} </h5></a>
                                    <p>{{ $service->des }}</p>
                                    <div class="text-center">
                                        <a href="{{ route('contact') }}" class="btn mt-4 text-white" style="background-color: #ff6600">{{ $service->btn }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>

</section>
<!-- //services -->



<!-- events -->
<section class="events py-lg-4 py-md-3 py-sm-3 py-3" id="events" style="background-color: #ff6600">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-white" style="font-size: 35px;font-weight: 600">{{ $chooseTitle->title }}</h3>
        <div class="row blog-top-grids">
            @foreach($chooses as $choose)
            <div class="col-lg-3 col-md-3 col-xl-3 col-sm-6 left-side-agile p-lg-4 p-md-4 p-3 text-center">
                <img src="{{ asset($choose->image) }}" alt="" class="">
                <h4 class="mb-2 text-white">{{ $choose->title }}</h4>
                <p class="groom-right text-white">
                    {{ $choose->des }}
                </p>
            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- events -->


<!--testimonial-->
<section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3" style="background-color: #f1f1f1">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">{{ $clientTitle->title }}</h3>
        <div id="carouselExampleControls" class="carousel slider" data-ride="carousel">
            <div class="carousel-inner text-center">
                @foreach($clientOnes as $one)
                <div class="carousel-item active client-img py-lg-4 py-md-3 py-sm-3 py-2" style="background-color: #ff6600;border-radius: 10px">
                    <div class="img-move">
                        <img class="img-fluid" src="{{ asset($one->image) }}" alt="">
                    </div>
                    <div class="client-matter pt-lg-4 pt-md-3 pt-3">
                        <p>{{ $one->comment }}</p>
                        <h6 class="pt-lg-3 pt-2">{{ $one->name }}</h6>
                    </div>
                </div>
                @endforeach
                
                @foreach($clients as $client)
                <div class="carousel-item client-img py-lg-4 py-md-3 py-sm-3 py-2" style="background-color: #ff6600;border-radius: 10px">
                    <div class="img-move">
                        <img class="img-fluid" src="{{ asset($client->image) }}" alt="">
                    </div>
                    <div class="client-matter pt-lg-4 pt-md-3 pt-3">
                        <p>{{ $client->comment}}</p>
                        <h6 class="pt-lg-3 pt-2">{{ $client->name}}</h6>
                    </div>
                </div>
                @endforeach
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="background-color: #ff6600">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="background-color: #ff6600">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//testimonial -->


<!--subscribe-->
<section class="py-lg-4 py-md-3 py-sm-3 py-3 " style="background-image: url({{ asset($join->image)}});background-repeat: no-repeat;position: center">
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

<script src='{{ asset('/') }}front/js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- For-Banner -->
<script src="{{ asset('/') }}front/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('/') }}front/js/anime.min.js"></script>
<script src="{{ asset('/') }}front/js/uncover.js"></script>
<script src="{{ asset('/') }}front/js/demo1.js"></script>
<!-- //For-Banner -->
<!--About OnScroll-Number-Increase-JavaScript -->
<script src="{{ asset('/') }}front/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}front/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //OnScroll-Number-Increase-JavaScript -->

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
</body>
</html>