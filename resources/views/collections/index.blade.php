@extends('collections.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 class="header-text">Laurie LaFrate Collections</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success plus-button" href="{{ route('collections.create') }}" title="Create a collection"> <i class="fas fa-plus-circle"></i></a>
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
            <th>background_image_url</th>
            <th>name_color_id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($collections as $collection)
            <tr>
                <td class="gold-text">{{ $collection->id }}</td>
                <td>{{ $collection->name }}</td>
                <td class="long-text">{{ $collection->description }}</td>
                <td>{{ $collection->background_image_url }}</td>
                <td>{{ $collection->name_color_id }}</td>
                <td>
                    <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" class="form-buttons">

                        <a href="{{ route('collections.show', $collection->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('collections.edit', $collection->id) }}">
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

    {!! $collections->links() !!}

@endsection