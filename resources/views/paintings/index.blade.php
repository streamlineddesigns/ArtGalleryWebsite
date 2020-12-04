@extends('paintings.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">Laurie LaFrate Paintings </h2>
            </div>
            <div class="float-left">
                <a class="btn btn-primary back-button" href="{{ url('/dashboard') }}" title="Home"> <i class="fas fa-home "></i> </a>
            </div>
            <div class="float-right">
                <a class="btn btn-success plus-button" href="{{ route('paintings.create') }}" title="Create a painting"> <i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-dark table-bordered table-responsive">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>footer_text</th>
            <th>price</th>
            <th>image_url</th>
            <th>name_color_id</th>
            <th>button_color_id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($paintings as $painting)
            <tr>
                <td class="gold-text">{{ $painting->id }}</td>
                <td>{{ $painting->name }}</td>
                <td class="long-text">{{ $painting->description }}</td>
                <td>{{ $painting->footer_text }}</td>
                <td>{{ $painting->price }}</td>
                <td>{{ $painting->image_url }}</td>
                <td>{{ $painting->name_color_id }}</td>
                <td>{{ $painting->button_color_id }}</td>
                <td>
                    <form action="{{ route('paintings.destroy', $painting->id) }}" method="POST" class="form-buttons">

                        <a href="{{ route('paintings.show', $painting->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('paintings.edit', $painting->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $paintings->links() !!}

@endsection