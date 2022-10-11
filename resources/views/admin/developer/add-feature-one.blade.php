@extends('admin.master')

@section('title')
    Feature | SMS MV
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

                <form action="{{ route('save.feature.one') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Feature Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Feature Description</label>
                        <div class="col-md-9">
                            <textarea name="des" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Feature Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" accept="iamge/*" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="status" value="1"/> Active</label>
                            <label><input type="radio" name="status" value="0"/> Inactive</label>
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