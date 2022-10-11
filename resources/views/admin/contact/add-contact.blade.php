@extends('admin.master')

@section('title')
    Contact | SMS MV
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

                <form action="{{ route('save.contact') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Contact Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{ $contact->title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Address Title</label>
                        <div class="col-md-9">
                            <input type="text" name="add_title" value="{{ $contact->add_title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Address Des.</label>
                        <div class="col-md-9">
                            <textarea name="add_des" class="form-control">{{ $contact->add_des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Phone Title</label>
                        <div class="col-md-9">
                            <input type="text" name="phone_title" value="{{ $contact->phone_title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Phone Des.</label>
                        <div class="col-md-9">
                            <textarea name="phone_des" class="form-control">{{ $contact->phone_des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Email Title</label>
                        <div class="col-md-9">
                            <input type="text" name="email_title" value="{{ $contact->email_title }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Email Des.</label>
                        <div class="col-md-9">
                            <textarea name="email_des" class="form-control">{{ $contact->email_des }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Location Link</label>
                        <div class="col-md-9">
                            <input type="text" name="map_link" value="{{ $contact->map_link }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Event Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection