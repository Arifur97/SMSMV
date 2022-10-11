@extends('admin.master')

@section('title')
    About Us | SMS MV
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">

                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('save.about') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Welcome Title</label>
                        <div class="col-md-9">
                            <input type="text" name="w_title" value="{{ $about->w_title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Welcome Description</label>
                        <div class="col-md-9">
                            <textarea name="w_des" class="form-control">{{ $about->w_des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">About Us Title</label>
                        <div class="col-md-9">
                            <input type="text" name="a_title" value="{{ $about->a_title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">About Us Description</label>
                        <div class="col-md-9">
                            <textarea name="a_des" class="form-control">{{ $about->a_des }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection