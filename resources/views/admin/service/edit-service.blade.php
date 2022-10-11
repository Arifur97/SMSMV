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

                <form action="{{ route('update.service') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Service Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{ $service->title }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $service->id }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Service Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="des">{{ $service->des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Button</label>
                        <div class="col-md-9">
                            <input type="text" name="btn" value="{{ $service->btn }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">BG Color Code</label>
                        <div class="col-md-9">
                            <input type="text" name="color" value="{{ $service->color }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Event Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" accept="image/*"/>
                            <br>
                            <img src="{{ asset($service->image) }}" alt="" height="80" width="120">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $service->status == 1 ? 'checked' : ' ' }} name="status" value="1"/> Active</label>
                            <label><input type="radio" {{ $service->status == 0 ? 'checked' : ' ' }} name="status" value="0"/> Inactive</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Event Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection