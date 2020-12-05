@extends('paintings.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">Edit Painting</h2>
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

    <form action="{{ route('paintings.update', $painting->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row card-style p-5 my-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $painting->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" rows="5" name="description"
                        placeholder="Description">{{ $painting->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Footer Text:</strong>
                    <textarea class="form-control" style="height:50px" name="footer_text"
                        placeholder="Footer Text">{{ $painting->footer_text }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <textarea class="form-control" style="height:50px" name="price"
                        placeholder="Price">{{ $painting->price }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image URL:</strong>
                    <input type="text" name="image_url" class="form-control" placeholder="{{ $painting->image_url }}"
                        value="{{ $painting->image_url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name Color:</strong>
                    <input type="text" name="image_url" class="form-control hex-color-picker-input" placeholder="{{ $painting->name_color }}" value="{{ $painting->name_color }}" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Button Color:</strong>
                    <input type="text" name="image_url" class="form-control hex-color-picker-input" placeholder="{{ $painting->button_color }}" value="{{ $painting->button_color }}" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection