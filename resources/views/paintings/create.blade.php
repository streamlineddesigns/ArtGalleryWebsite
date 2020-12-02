@extends('paintings.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Painting</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('paintings.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>collection_id:</strong>
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
                    <strong>name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>footer_text:</strong>
                    <input type="text" name="footer_text" class="form-control" placeholder="footer_text">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>image_url:</strong>
                    <input type="text" name="image_url" class="form-control" placeholder="image_url">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name_color_id:</strong>
                    <select name="name_color_id" class="form-control">
                        <option value="">Select Color</option>
                        @foreach ($colors as $key => $value)
                        <option value="{{$value->id}}">{{ $value->name }}</option>
                        @endforeach    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>button_color_id:</strong>
                    <select name="button_color_id" class="form-control">
                        <option value="">Select Color</option>
                        @foreach ($colors as $key => $value)
                        <option value="{{$value->id}}">{{ $value->name }}</option>
                        @endforeach    
                    </select>
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
