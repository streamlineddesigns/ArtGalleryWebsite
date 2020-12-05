@extends('paintings.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">Add New Painting</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary back-button" href="{{ route('paintings.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('paintings.store') }}" method="POST" >
        @csrf

        <div class="row card-style p-5 my-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Collection:</strong>
                    <select name="collection_id" class="form-control">
                        <option value="">Select Collection</option>
                        @foreach ($collections as $key => $value)
                        <option value="{{$value->id}}">{{ $value->name }}</option>
                        @endforeach    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" rows="5" name="description"
                        placeholder="Description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Footer Text:</strong>
                    <input type="text" name="footer_text" class="form-control" placeholder="Footer Text">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image URL:</strong>
                    <input type="text" name="image_url" class="form-control" placeholder="Image URL">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name Color:</strong>
                    <input type="text" name="name_color" class="form-control hex-color-picker-input" placeholder="Name Color" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Button Color:</strong>
                    <input type="text" name="button_color" class="form-control hex-color-picker-input" placeholder="Button Color" autocomplete="off" readonly>
                </div>
            </div>
            <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>button_color:</strong>
                    <input type="color" name="button_color" class="form-control" value="#fff">
                </div>
            </div>-->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
