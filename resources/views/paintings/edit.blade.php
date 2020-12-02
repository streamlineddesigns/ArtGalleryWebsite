@extends('paintings.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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

    <form action="{{ route('paintings.update', $painting->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" value="{{ $painting->name }}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description">{{ $painting->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>footer_text:</strong>
                    <textarea class="form-control" style="height:50px" name="footer_text"
                        placeholder="footer_text">{{ $painting->footer_text }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>price:</strong>
                    <textarea class="form-control" style="height:50px" name="price"
                        placeholder="footer_text">{{ $painting->price }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>image_url:</strong>
                    <input type="text" name="image_url" class="form-control" placeholder="{{ $painting->image_url }}"
                        value="{{ $painting->image_url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name_color_id:</strong>
                    <select name="name_color_id" class="form-control">
                        @foreach ($colors as $key => $value)
                        <option value="{{$value->id}}" 
                        @if ($value->id == $painting->name_color_id)
                            selected="selected"
                        @endif    
                        >{{ $value->name }}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>button_color_id:</strong>
                    <select name="button_color_id" class="form-control">
                        @foreach ($colors as $key => $value)
                        <option value="{{$value->id}}" 
                        @if ($value->id == $painting->button_color_id)
                            selected="selected"
                        @endif    
                        >{{ $value->name }}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection