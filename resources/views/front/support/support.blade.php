@extends('front.master')

@section('body')
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">Support</h3>
            <div class="row agile-service-grid pt-lg-4 pt-md-4 pt-3">
                <div class="col-md-12 col-lg-12 col-sm-12 col-4">

                    <div class="container">
                        <div class="row">
                            @php($i = 1)
                            @foreach($supports as $support)
                                <div>
                                    <h3 class="mt-3" style="font: bold 30px 'Open Sans'">{{ $i++ }}. {{ $support->title }}</h3>
                                    <p style="font: 22px Nunito">
                                        {!! $support->des !!}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection