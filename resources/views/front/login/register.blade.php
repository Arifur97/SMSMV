@extends('front.master')

@section('body')
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">Register</h3>
        <div class="abt-inner-one pb-lg-3 pb-3 ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="col-lg-6 col-xl-6 col-sm-6 col-md-6 m-auto">
                <form method="POST" action="{{ route('save.register') }}">
                    @csrf
                    <label class="text-primary">First Name</label>
                    <input class="form-control" type="text" placeholder="First Name" name="first_name">
                    <label class="text-primary">Last Name</label>
                    <input class="form-control" type="text" placeholder="Last Name" name="last_name">
                    <label class="text-primary">Email</label>
                    <input class="form-control" type="email" placeholder="Email" name="email">
                    <label class="text-primary">Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <label class="text-primary">Mobile</label>
                    <input class="form-control" type="number" placeholder="Mobile" name="phone">
                    <label class="text-primary">Address</label>
                    <textarea class="form-control" placeholder="Address" name="address"></textarea>

                    <label></label>
                    <input class="btn btn-primary mt-3 form-control" type="submit" value="Register">
                    <p href="register.html" class="text-center">Already have a account! <a href="{{ route('visitor.login') }}">Login</a></p>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection