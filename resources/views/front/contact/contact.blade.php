@extends('front.master')

@section('body')
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">{{ $contact->title }}</h3>
            <div class="agile-info-para">
                <div class="row contactright pb-lg-5 pb-md-4 pb-sm-3 pb-3">
                    <div class="col-lg-4 col-md-4  text-center contact-address-grid">
                        <div class="footer_grid_left">
                            <div class="contact_footer_grid_left text-center mb-3">
                                <h5> {{ $contact->add_title }}</h5>
                            </div>
                            <p>{{ $contact->add_des }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                        <div class="footer_grid_left">
                            <div class="contact_footer_grid_left text-center mb-3">
                                <h5>{{ $contact->phone_title }}</h5>
                            </div>
                            <p>{{ $contact->phone_des }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                        <div class="footer_grid_left">
                            <div class="contact_footer_grid_left text-center mb-3">
                                <h5>{{ $contact->email_title }}</h5>
                            </div>
                            <p><a href="#">{{ $contact->email_des }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row contact-wls-detail">
                    <div class="col-lg-6 contact-form pb-lg-3 pb-2">
                        <form action="#" method="post">
                            <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                                <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                                <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="subjecct">
                                </div>
                            </div>
                            <div class="form-group contact-forms">
                                <textarea class="form-control" placeholder="Meassage" ></textarea>
                            </div>
                            <button type="button" class="btn sent-butnn btn-lg">Send</button>
                        </form>
                    </div>
                    <div class="col-lg-6 address_mail_footer_grids">
                        <iframe src="{{ $contact->map_link }}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection