@extends('front.master')

@section('body')
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">{{ $developer->title }}</h3>
            <div class="abt-inner-one pb-lg-3 pb-3 text-center">
                <!--<div class=" abut-inner-right">-->
                <!--<h4>Your Training <br>Professional Coaches</h4>-->
                <!--</div>-->
                <div class="abut-inner-left mt-lg-4 mt-md-3 mt-2">
                    <p class="text-justify" style="font: 16px 'Open Sans';color: #455a64">
                        {{ $developer->des1 }}
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
                @foreach($featureOnes as $feature)
                <div class="col-lg-4 col-md-4 col-sm-4 abut-inner-img">
                    <div class="using-icon-inner-two" style="height: 400px;border-radius: 10px">
                        <img src="{{ asset($feature->image) }}" alt="" style="height: 200px;width: 100%;border-radius: 10px 10px 0px 0px">
                        <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                            <h4 class="mt-3">{{ $feature->title }}</h4>
                            <p class="pr-3 pl-3">
                                {{ $feature->des }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            

            </div>
        </div>
    </section>
    <!--//about-two-->



    <section class="events py-lg-4 py-md-3 py-sm-3 py-3" id="events">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="row blog-top-grids">

            @foreach($featureTwos as $feature)
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6 left-side-agile p-lg-4 p-md-4 p-3 text-center" style="border-radius: 10px">
                    <img src="{{ asset($feature->image) }}" alt="" class="" style="height: 120px;width: 120px">
                    <h4 class="mb-2 ">{{ $feature->des }}</h4>
                </div>
                @endforeach

                <div class="m-auto">
                    <div class="text-center">
                        <h5 class="m-auto pt-5">{{ $developer->des2 }}</h5>
                            <a href="#" class="btn text-white text-center mt-4" style="background-color: #fd7e14">{{ $developer->btn }}</a>
                    </div>
                </div>
         
            </div>
        </div>

    </section>
@endsection