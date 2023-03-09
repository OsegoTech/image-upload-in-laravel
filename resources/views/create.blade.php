@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 nargin-tb">
            <div class="pull-left">
                <h2>Add new Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{url('/')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!!</strong>
            There were some problems with your input <br> <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" name="detail" style="height: 150px" placeholder="Details"></textarea>
                </div>
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
