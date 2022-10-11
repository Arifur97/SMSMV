@extends('admin.master')

@section('title')
    Service | SMS MV
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

                <form action="{{ route('save.join') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{ $join->title }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-9">
                            <textarea name="des" class="form-control">{{ $join->des }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Button One</label>
                        <div class="col-md-9">
                            <input type="text" name="btn1" value="{{ $join->btn1 }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Button Two</label>
                        <div class="col-md-9">
                            <input type="text" name="btn2" value="{{ $join->btn2 }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" accept="iamge/*" class="form-control"/>
                            <br>
                            <img src="{{ asset($join->image) }}" alt="" height="80" width="120">
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