@extends('main')

@section('content')

    <br >
    <br >

    <div class="container">
        <div class="col-md-10 col-md-offset-1">

            <h3>Edit Ad</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Errors:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/ad/update">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" id="title" placeholder="Enter ad title">
                </div>
                <div class="form-group">
                    <label for="price">Price (USD)</label>
                    <input type="text" class="form-control" name="price" value="{{ $post->price }}" id="price" placeholder="Enter ad price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{ $post->description }}</textarea>
                </div>

                <input type="hidden" name="id" value="{{ $post->id }}">

                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>

        </div>
    </div>

@stop
