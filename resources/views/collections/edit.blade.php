@extends('collections.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">Edit Collection</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary back-button" href="{{ route('collections.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('collections.update', $collection->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row card-style p-5 my-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $collection->name }}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" rows="5" name="description"
                        placeholder="description">{{ $collection->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Background Image URL:</strong>
                    <input type="text" name="background_image_url" class="form-control" placeholder="{{ $collection->background_image_url }}"
                        value="{{ $collection->background_image_url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name Color:</strong>
                    <input type="text" name="name_color" class="form-control hex-color-picker-input" placeholder="{{ $collection->name_color }}" value="{{ $collection->name_color }}" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection