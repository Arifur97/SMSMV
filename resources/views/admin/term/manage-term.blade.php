@extends('admin.master')

@section('title')
    Terms & Conditions | SMS MV
@endsection

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Terms & Conditions List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($terms as $term)
                            <tbody>
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $term->title }}</td>
                                <td>{!! $term->des !!}</td>
                                <td>@if($term->status == 1)
                                        <p class="btn btn-success">Active</p>
                                    @else
                                        <p class="btn btn-warning">Inactive</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit.term',['id' => $term->id]) }}" class="text-success btn btn-primary">Edit</a>
                                    <a href="#" id="{{ $term->id }}" class="text-danger delete-btn btn btn-danger" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteTermForm'+'{{ $term->id }}').submit();
                                            }
                                            ">Delete</a>
                                    <form id="deleteTermForm{{ $term->id }}" action="{{ route('delete.term') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $term->id }}" name="id"/>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection