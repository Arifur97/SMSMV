@extends('front.master')

@section('body')
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
            <li>
                <a href="index.html">Home</a>
                <span>/ /</span>
            </li>
            <li>About</li>
        </ul>
    </div>
</div>
<div class="inner_page-banner">
    <div class="text-center m-auto text-white">
        <h1 class="pb-3" style="padding-top: 100px">{{ $test->title}}</h1>
        <p style="font-size: 20px">{{ $test->des}}</p>
    </div>
</div>
<!-- //short-->
<!--about-->
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3 card" style="background-color: whitesmoke">
        <div class="abt-inner-one pb-lg-3 pb-3 text-center">
            <div class="abt-inner-one pb-lg-3 pb-3 ">
                <div class="col-lg-6 col-xl-6 col-sm-6 col-md-6 m-auto">
                    <form action="#" method="POST">
                        <label>{{ $test->number}}</label>
                        <input class="form-control" type="text" placeholder="" name="sms">

                        <label></label>
                        <input class="btn form-control text-white" style="background-color: #ff6600" type="submit" value="{{ $test->btn}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection