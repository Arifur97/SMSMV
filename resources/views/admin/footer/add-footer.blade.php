@extends('admin.master')

@section('title')
    Footer | SMS MV
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

                <form action="{{ route('save.footer') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" accept="iamge/*" class="form-control"/>
                            <br>
                            <img src="{{ asset($footer->image) }}" alt="" height="80" width="120">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-9">
                            <textarea name="des" class="form-control">{{ $footer->des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Contact Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{ $footer->title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Contact</label>
                        <div class="col-md-9">
                            <textarea name="number" class="form-control">{{ $footer->number }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Copyright</label>
                        <div class="col-md-9">
                            <input type="text" name="copy" value="{{ $footer->copy }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Facebook</label>
                        <div class="col-md-9">
                            <input type="text" name="link1" value="{{ $footer->link1 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Twitter</label>
                        <div class="col-md-9">
                            <input type="text" name="link2" value="{{ $footer->link2 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Linkedin</label>
                        <div class="col-md-9">
                            <input type="text" name="link3" value="{{ $footer->link3 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Youtube</label>
                        <div class="col-md-9">
                            <input type="text" name="link4" value="{{ $footer->link4 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Instagram</label>
                        <div class="col-md-9">
                            <input type="text" name="link5" value="{{ $footer->link5 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Pinterest</label>
                        <div class="col-md-9">
                            <input type="text" name="link6" value="{{ $footer->link6 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Google Plus</label>
                        <div class="col-md-9">
                            <input type="text" name="link7" value="{{ $footer->link7 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Snap Chat</label>
                        <div class="col-md-9">
                            <input type="text" name="link8" value="{{ $footer->link8 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Vimeo</label>
                        <div class="col-md-9">
                            <input type="text" name="link9" value="{{ $footer->link9 }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Others</label>
                        <div class="col-md-9">
                            <input type="text" name="link10" value="{{ $footer->link10 }}" class="form-control"/>
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