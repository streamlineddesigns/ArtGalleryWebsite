@extends('collections.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">View Collection Data</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary back-button" href="{{ route('collections.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row card-style p-5 my-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>  {{ $collection->name }}</h2>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $collection->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $collection->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Background Image URL:</strong>
                {{ $collection->background_image_url }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Color ID:</strong>
                {{ $collection->name_color_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($collection->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection