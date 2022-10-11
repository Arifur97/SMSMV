@extends('admin.master')

@section('title')
    Operator | SMS MV
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

                <form action="{{ route('update.operator') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editOperatorForm">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Country Name</label>
                        <div class="col-md-9">
                            <select name="country_id" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $operator->name }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $operator->id }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Rate</label>
                        <div class="col-md-9">
                            <input type="text" name="rate" value="{{ $operator->rate }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $operator->status == 1 ? 'checked' : ' ' }} name="status" value="1"/> Active</label>
                            <label><input type="radio" {{ $operator->status == 0 ? 'checked' : ' ' }} name="status" value="0"/> Inactive</label>
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
    <script>
        document.forms['editOperatorForm'].elements['country_id'].value = '{{ $operator->country_id }}';
    </script>
@endsection