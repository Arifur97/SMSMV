@extends('front.master')

@section('body')
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">Login</h3>
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
                <form action="{{ route('visitor.loginCheck') }}" method="POST">
                    @csrf
                    <label class="text-primary">Email</label>
                    <input class="form-control" type="email" placeholder="Email" name="email">
                    <label class="text-primary">Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <a href="forgot-password.html">I forgot password</a>

                    <label></label>
                    <input class="btn btn-primary mt-3 form-control" type="submit" value="Login">
                    <a href="{{ route('visitor.register') }}" class="text-center">Create an account</a>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
