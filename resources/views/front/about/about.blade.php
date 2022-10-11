@extends('front.master')

@section('body')
    <div class="using-border py-3">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="{{ route('/') }}">Home</a>
                    <span>/ /</span>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <div class="inner_page-banner">
        <div class="text-center m-auto text-white container">
            <p class="pb-3" style="padding-top: 60px;font-size: 40px;font-weight: 600;">{{ $about->w_title }}</p>
            <p class="text-justify" style="font-size: 20px">{{ $about->w_des }}</p>
        </div>
    </div>
    <!-- //Navigation-->
    <!--//headder-->

    <!--<div class="inner_page-banner">-->
    <!--</div>-->
    <!--//banner -->

    <!-- short -->
    <!--<div class="using-border py-3">-->
    <!--<div class="inner_breadcrumb  ml-4">-->
    <!--<ul class="short_ls">-->
    <!--<li>-->
    <!--<a href="index.html">Home</a>-->
    <!--<span>/ /</span>-->
    <!--</li>-->
    <!--<li>About</li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!-- //short-->
    <!--about-->
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 0px;font-size: 30px;font-weight: 500">{{ $about->a_title }}</h3>
            <div class="abt-inner-one pb-lg-3 pb-3 text-center">
                <!--<div class=" abut-inner-right">-->
                <!--<h4>Your Training <br>Professional Coaches</h4>-->
                <!--</div>-->
                <div class="abut-inner-left mt-lg-4 mt-md-3 mt-2">
                    <p class="text-justify about-text">
                        {{ $about->a_des }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--//about-->
    <!--about-two-->
    <section class="abt-inner-agile py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid text-center py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
                @foreach($features as $feature)
                <div class="col-lg-3 col-md-3 col-sm-6 abut-inner-img">
                    <div class="using-icon-inner" style="height: 350px;border-radius: 10px">
                        <img src="{{ asset($feature->image) }}" alt="">
                        <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                            <h4 class="mt-3">{{ $feature->title }}</h4>
                            <p>{{ $feature->des }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection