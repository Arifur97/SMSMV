@extends('front.master')

@section('body')
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 120px">{{ $serviceTitle->title}}</h3>
            <div class="row agile-service-grid pt-lg-4 pt-md-4 pt-3">

                @foreach($services as $service)
                <div class="col-lg-6 col-md-12 col-sm-12 w3layouts-service-list text-center mt-3">
                    <div class="white-shadow">
                        <div class="text-wls-ser-bake">
                            <img src="{{ asset($service->image) }}" alt="" style="height: 250px;width: 100%;border-radius: 10px 10px 0px 0px">
                        </div>
                        <div class="ser-inner-info">
                            <h4>{{ $service->title }}</h4>
                            <p class="pl-3 pr-3">
                                {{ $service->des }}
                            </p>
                        </div>
                        <div class="outs-agile-buttn mt-lg-3 mt-2 mb-2">
                            <a href="{{ route('our-package') }}" style="background-color: #ff6600">{{ $service->btn }}</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection